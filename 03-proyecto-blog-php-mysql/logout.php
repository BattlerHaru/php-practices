?<?php

// Iniciar sesión
if ( !isset( $_SESSION ) ) {
    session_start();
}

// Cerrar sesion
if ( isset( $_SESSION['usuario'] ) ) {
    session_destroy();
}

header( 'Location: index.php' );

?>