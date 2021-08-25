<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'phpmysql';

// Conectar a la base de datos
$conexion = mysqli_connect( $host, $user, $pass, $database );

// comparar si la conexion es correcta
if ( mysqli_connect_errno() ) {
    echo 'La conexion a la base de datos ha fallado' . '<br>';
    echo mysqli_connect_error();
} else {
    echo 'La conexion a la base de datos ha sido un exito';
}

// Consulta para configurar caracteres
$query = "SET NAMES 'utf8'";
mysqli_query( $conexion, $query );

// select
$query = "SELECT * FROM notas";
$resultado = mysqli_query( $conexion, $query );

while ( $nota = mysqli_fetch_assoc( $resultado ) ) {
    echo '<pre>';
    var_dump( $nota );
    echo '</pre>';
}

// Insertar datos
$query = "INSERT INTO notas VALUES (NULL, 'Nota desde PHP', 'Esto es una nota de PHP', 'green');";
$insert = mysqli_query( $conexion, $query );

if ( $insert ) {
    echo 'Se inserto la nota correctamente';
} else {
    echo 'Error al insertar la nota' . mysqli_error( $conexion );
}

?>