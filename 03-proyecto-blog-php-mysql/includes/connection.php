<?php

// conexion
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'phpmysql';

// Conectar a la base de datos
$db = mysqli_connect( $host, $user, $pass, $database );

// Consulta para configurar caracteres
$query = "SET NAMES 'utf8'";
mysqli_query( $db, $query );

// iniciar la sesion
// Iniciar sesión
if ( !isset( $_SESSION ) ) {
    session_start();
}
?>

