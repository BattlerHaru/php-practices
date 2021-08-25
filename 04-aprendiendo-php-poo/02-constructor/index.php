<?php

require_once 'coche.php';

$coche = new Coche( "Lila", "Renault", "Clio", 150, 200, 5 );

echo $coche->mostrarInformacion( $coche );

?>