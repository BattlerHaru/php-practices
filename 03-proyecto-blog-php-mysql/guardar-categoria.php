<?php
$error = false;
$errores;

if ( isset( $_POST['submit'] ) ) {

    // Conexión a la base de datos
    require_once 'includes/connection.php';

    // Verificar si existen los datos
    if ( isset( $_POST['nombre'] ) ) {
        // Agregarlas  variables
        $nombre = mysqli_real_escape_string( $db,
            trim( $_POST['nombre'] ) );

        // Validar datos
        if ( empty( $nombre ) ) {
            $errores['nombre'] = 'El nombre no es valido';
            $error = true;
        }
    } else {
        $error = true;
    }

} else {
    $error = true;
}

if ( !$error ) {
    // insertar en la db
    $query = "INSERT INTO categorias VALUES(null, '$nombre');";
    $resp = mysqli_query( $db, $query );

    if ( $resp ) {
        $_SESSION['completado'] = "Categoria: '" . $nombre . "',  agregada con éxito";
    } else {
        $error = true;
        $_SESSION['errores']['general'] = 'Fallo al guardar categoria';

    }
} else {
    $_SESSION['errores'] = $errores;

}

header( 'Location: crear-categoria.php' );

?>