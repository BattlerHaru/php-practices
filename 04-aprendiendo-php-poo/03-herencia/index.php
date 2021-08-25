<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre( 'Karen' );
echo '<pre>';
var_dump( $persona );
echo '</pre>';

$informatico = new Informatico();
$informatico->setAltura( 1.72 );

echo '<pre>';
var_dump( $informatico );
echo '</pre>';

$tecnicoRedes = new TecnicoRedes();
echo '<pre>';
var_dump( $tecnicoRedes );
echo '</pre>';

?>