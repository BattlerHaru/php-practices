<h1>Hola Mundo MVC</h1>

<?php

require_once 'autoloader.php';

// Esto es lo que se le conoce como controlador frontal, sirve para poder cambiar entre controladores de manera rapida.

if ( isset( $_GET['controller'] ) ) {
    $controladorNombre =
        $_GET['controller'] . 'Controller';

} else {
    echo 'Pagina no encontrda';
    exit();
}

// ruta: http://localhost/
// se agrega: ?controller=Usuario&action=crear
// dependiendo de lo que se desee hacer
if ( isset( $controladorNombre ) && class_exists( $controladorNombre ) ) {

    $controlador = new $controladorNombre();

    if ( isset( $_GET['action'] ) && method_exists( $controlador, $_GET['action'] ) ) {
        $action = $_GET['action'];
        $controlador->$action();

    } else {
        echo 'Pagina no encontrada - metodo';
    }

} else {
    echo 'Pagina no encontrada clase';
}

?>
