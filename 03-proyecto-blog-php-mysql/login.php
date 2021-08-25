<?php
// Conexión a la base de datos
require_once 'includes/connection.php';

// Iniciar sesión
if ( !isset( $_SESSION ) ) {
    session_start();
}

// Borrar error antiguo
if ( isset( $_SESSION['error_login'] ) ) {
    $_SESSION['error_login'] = null;
}

// Verificar si existen los datos
if (
    isset( $_POST['email'] )
    && isset( $_POST['pass'] )
) {

    // Agregarlas  variables
    $email = mysqli_real_escape_string( $db,
        trim( $_POST['email'] ) );
    $pass = mysqli_real_escape_string( $db, $_POST['pass'] );

    // Consulta
    $query = "SELECT * FROM usuarios WHERE email = '$email';";
    $resp = mysqli_query( $db, $query );

    // Verifica que coincida y exista data
    if ( $resp && mysqli_num_rows( $resp ) == 1 ) {
        $usuario = mysqli_fetch_assoc( $resp );

        // Comprobar la contraseña
        $passwordCheck = password_verify( $pass, $usuario['password'] );

        if ( $passwordCheck ) {
            $_SESSION['usuario'] = $usuario;
        } else {
            // guardar los datos en una sesion
            $_SESSION['error_login'] = "Email o password incorrectos";
        }

    } else {
        $_SESSION['error_login'] = "Login incorrecto";
    }

}

header( 'Location: index.php' );

?>