<?php

$archivo = $_FILES['archivo'];

// echo '<pre>';
// var_dump($archivo);
// echo '</pre>';

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if (
    $tipo == 'image/jpg'
    || $tipo == 'image/jpeg'
    || $tipo == 'image/png'
    || $tipo == 'image/gif'
) {
    $destino = 'images/';

    if ( !is_dir( $destino ) ) {
        mkdir( $destino, 0777 );
    }

    $destino = $destino . $nombre;

    move_uploaded_file( $archivo['tmp_name'], $destino );

    header( 'Refresh: 3; URL=index.php' );
    echo "Imagen subida con exito";

} else {
    header( 'Refresh: 3; URL=index.php' ); // redirecciona en 3 segundos
    echo "Solo se permite subir una imagen";
}
