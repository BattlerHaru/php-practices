<?php
$error = false;
$errores;

if ( isset( $_POST['submit'] ) ) {

    // Conexión a la base de datos
    require_once 'includes/connection.php';

    // Iniciar sesión
    if ( !isset( $_SESSION ) ) {
        session_start();
    }

    // Verificar si existen los datos
    if (
        isset( $_POST['nombre'] )
        && isset( $_POST['apellidos'] )
        && isset( $_POST['email'] )
        && isset( $_POST['pass'] )
    ) {

        // Agregarlas  variables
        // mysqli_real_escape_string escapa las comillas "'
        $nombre = mysqli_real_escape_string( $db,
            trim( $_POST['nombre'] ) );
        $apellidos = mysqli_real_escape_string( $db,
            trim( $_POST['apellidos'] ) );
        $email = mysqli_real_escape_string( $db,
            trim( $_POST['email'] ) );
        $pass = mysqli_real_escape_string( $db, $_POST['pass'] );

        // Validar datos
        if (
            empty( $nombre )
            || is_numeric( $nombre )
            || preg_match( "/[0-9]/", $nombre )
        ) {
            $errores['nombre'] = 'El nombre no es valido';
            $error = true;
        }

        if ( empty( $apellidos )
            || is_numeric( $apellidos )
            || preg_match( "/[0-9]/", $apellidos )
        ) {
            $error = true;
            $errores['apellidos'] = 'Los apellidos no es valido';
        }
        if ( empty( $email )
            || !filter_var( $email, FILTER_VALIDATE_EMAIL )
        ) {
            $error = true;
            $errores['email'] = 'El email no es valido';
        }

        $isset_email = "SELECT email FROM usuarios WHERE email ='$email' AND id NOT IN ({$_SESSION['usuario']['id']})";
        $isset_email = mysqli_query( $db, $isset_email );

        if ( $isset_email && mysqli_num_rows( $isset_email ) >= 1 ) {
            $error = true;
            $errores['email'] = 'Ya existe un usuario con ese email';
        }
    } else {
        $error = true;
    }
} else {
    $error = true;
}

if ( !$error ) {

    $id = $_SESSION['usuario']['id'];

    $query = '';

    // inicio del query
    $query = "UPDATE usuarios
    SET nombre = '$nombre',
    apellidos = '$apellidos',
    email = '$email'";

    if ( !empty( $pass )
    ) {
        // Cifrar la password, el cost cifra la pass un numero de veces, en este caso 4
        $pass_safe = password_hash( $pass, PASSWORD_BCRYPT, ['cost' => 4] );
        $query = $query . ", password = '$pass_safe'";
    }

    $query = $query . " WHERE id = '$id';";
    $resp = mysqli_query( $db, $query );

    // Verifica que se haya actualizado
    if ( $resp ) {
        $_SESSION['usuario']['nombre'] = $nombre;
        $_SESSION['usuario']['apellidos'] = $apellidos;
        $_SESSION['usuario']['email'] = $email;
        $_SESSION['completado'] = "Datos actualizados con exito éxito";

    } else {
        $_SESSION['errores']['general'] = "Error al actualizar sus datos";
    }

} else {
    $_SESSION['errores'] = $errores;
}

header( 'Location: mis-datos.php' );

?>