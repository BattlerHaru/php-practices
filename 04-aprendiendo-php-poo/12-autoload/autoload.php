<?php

// Este metodo busca todas las clases que se encuentren en ese directorio
function app_autoloader( $class ) {
    require_once 'classes/' . $class . '.php';
}

// Y este lo registra
spl_autoload_register( 'app_autoloader' );
?>