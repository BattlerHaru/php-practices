<?php

try {
    throw new Exception( "Hay un error" );
} catch ( Exception $e ) {
    echo 'paso algo' . $e;
} finally {
    echo 'termino';
}
?>