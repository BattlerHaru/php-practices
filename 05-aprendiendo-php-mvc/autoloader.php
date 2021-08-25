<?php

spl_autoload_register( 'myAutoLoader' );

function myAutoLoader( $className ) {

    $className = lcfirst( $className );
    $className = str_replace( "Controller", '', $className );

    $path = 'controllers/';
    $extension = '.controller.php';
    $fullPath = $path . $className . $extension;

    require_once $fullPath;

}

?>