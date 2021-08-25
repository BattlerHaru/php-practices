
<?php

// Iniciar sesión
if ( !isset( $_SESSION ) ) {
    session_start();
}

// Verificar que exista la sesion usuario
if ( !isset( $_SESSION['usuario'] ) ) {
    header( 'Location: index.php' );
}

?>