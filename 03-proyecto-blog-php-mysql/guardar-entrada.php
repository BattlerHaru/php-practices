<?php
$error = false;
$errores;

if ( isset( $_POST['submit'] ) ) {

    // Conexión a la base de datos
    require_once 'includes/connection.php';

    // Verificar si existen los datos
    if ( isset( $_POST['titulo'] )
        || isset( $_POST['descripcion'] )
        || isset( $_POST['categoria'] )
    ) {

        // Agregarlas  variables
        $titulo = mysqli_real_escape_string( $db,
            trim( $_POST['titulo'] ) );
        $descripcion = mysqli_real_escape_string( $db,
            trim( $_POST['descripcion'] ) );
        $categoria = mysqli_real_escape_string( $db,
            trim( $_POST['categoria'] ) );

        // Validar datos
        if ( empty( $titulo ) ) {
            $errores['titulo'] = 'El titulo no es valido';
            $error = true;
        }
        if ( empty( $descripcion ) ) {
            $errores['descripcion'] = 'La descripcion no es valida';
            $error = true;
        }
        if ( empty( $categoria )
            || !is_numeric( $categoria )
            || !preg_match( "/[0-9]/", $categoria )

        ) {
            $errores['categoria'] = 'La categoria no es valida';
            $error = true;
        }

    } else {
        $error = true;
    }

} else {
    $error = true;
}

if ( !$error ) {
    $id = $_SESSION['usuario']['id'];
    $entrada_id = $_POST['entrada_id'];

// insertar en la db
    if ( $entrada_id ) {
        $query = "UPDATE entradas
            SET categoria_id = '$categoria',
            titulo = '$titulo',
            descripcion = '$descripcion',
            fecha = CURDATE()
            WHERE id='$entrada_id'
            AND usuario_id = '$id';";
    } else {
        $query = "INSERT INTO entradas(id, usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (null, '$id', '$categoria', '$titulo', '$descripcion', CURDATE());";
    }

    $resp = mysqli_query( $db, $query );

    if ( $resp ) {
        $_SESSION['completado'] = "Entrada: '" . $titulo . "', guardada  con éxito";
    } else {
        $error = true;
        $_SESSION['errores']['general'] = 'Fallo al guardar entrada';
    }
} else {
    $_SESSION['errores'] = $errores;

}

header( 'Location: crear-entrada.php' );

?>