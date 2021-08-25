<?php
require_once 'includes/header.php';

// Iniciar sesión
if ( !isset( $_SESSION ) ) {
    session_start();
}

// Verificar que exista la sesion usuario y el id en los parametros
if ( !isset( $_SESSION['usuario'] ) && !$_GET['id'] ) {
    header( 'Location: index.php' );
}

// Verifica que exista el id de la entrada
$entrada = conseguirEntrada( $db, $_GET['id'] );
if ( !$entrada ) {
    header( 'Location: index.php' );
}

$uid = $_SESSION['usuario']['id'];
$eid = $_GET['id'];

// Elimina la entrada

$query = "DELETE
        FROM entradas
        WHERE usuario_id = '$uid'
        AND id = '$eid'";

mysqli_query( $db, $query );
header( 'Location: index.php' );

?>