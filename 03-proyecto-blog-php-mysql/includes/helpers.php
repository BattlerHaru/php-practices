<?php

function mostrarError( $errores, $campo ) {
    $alerta = '';

    if ( isset( $errores[$campo] ) && !empty( $campo ) ) {
        $alerta = '<div class="alerta alerta-error">'
            . $errores[$campo]
            . '</div>';
    }

    return $alerta;
}

function borrarErrores() {
    if ( isset( $_SESSION['errores'] ) ) {
        $_SESSION['errores'] = null;
    }
    if ( isset( $_SESSION['completado'] ) ) {
        $_SESSION['completado'] = null;
    }
}

function conseguirCategorias( $conexion ) {
    $query = "SELECT * FROM categorias ORDER BY id ASC;";
    $resp = mysqli_query( $conexion, $query );

    $result = array();
    if ( $resp && mysqli_num_rows( $resp ) >= 1 ) {
        $result = $resp;
    }

    return $result;
}

function conseguirCategoria( $conexion, $id ) {
    $query = "SELECT * FROM categorias WHERE id='$id'";
    $resp = mysqli_query( $conexion, $query );

    $result = array();
    if ( $resp && mysqli_num_rows( $resp ) >= 1 ) {
        $result = mysqli_fetch_assoc( $resp );
    }

    return $result['nombre'];
}

function conseguirEntrada( $conexion, $id ) {
    $query = "SELECT e.*, c.nombre as categoria,
    CONCAT(u.nombre, ' ', u.apellidos) as usuario
    FROM entradas e
    INNER JOIN categorias c
    ON e.categoria_id = c.id
    INNER JOIN usuarios u
    ON e.usuario_id = u.id
    WHERE e.id = '$id';";
    $resp = mysqli_query( $conexion, $query );

    $result = array();
    if ( $resp && mysqli_num_rows( $resp ) >= 1 ) {
        $result = mysqli_fetch_assoc( $resp );
    }

    return $result;
}

function conseguirEntradas( $conexion, $categoria_id, $limit = null, $busqueda = null ) {
    $query = "SELECT e.*, c.nombre as categoria
    FROM entradas e
    INNER JOIN categorias c
    ON e.categoria_id = c.id";

    $categoria_id ? $query .= " WHERE c.id = $categoria_id" : null;

    $busqueda ? $query .= " WHERE e.titulo LIKE '%$busqueda%'" : null;

    $query .= " ORDER BY e.id DESC";

    $limit ? $query .= " LIMIT $limit" : $query .= ';';

    $resp = mysqli_query( $conexion, $query );

    $result = array();
    if ( $resp && mysqli_num_rows( $resp ) >= 1 ) {
        $result = $resp;
    }

    return $result;
}

?>