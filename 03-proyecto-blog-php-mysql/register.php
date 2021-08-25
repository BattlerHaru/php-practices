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
        if ( empty( $pass )
        ) {
            $error = true;
            $errores['pass'] = 'La password no es valido';
        }
    } else {
        $error = true;

    }
} else {
    $error = true;

}

if ( !$error ) {
    // Cifrar la password, el cost cifra la pass un numero de veces, en este caso 4
    $pass_safe = password_hash( $pass, PASSWORD_BCRYPT, ['cost' => 4] );

    // insertar en la db
    $query = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$pass_safe', CURDATE());";
    $resp = mysqli_query( $db, $query );

    if ( $resp ) {
        $_SESSION['completado'] = "El registro se ha completado con éxito";
    } else {
        $error = true;
        $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
    }
} else {
    $_SESSION['errores'] = $errores;
}

header( 'Location: index.php' );

?>