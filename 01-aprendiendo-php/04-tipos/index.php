<?php 

/* 

TIPOS DE DATOS: 
Entero (int/integer) = 99
Coma flotante / decimales (float / double) = 3.45
Cadenas (string) = 'Hola, soy un string'
Boleano (bool) = true (1) / false (0 / null)
null 
Arrays (coleccion de datos)
Objetos

*/

$numero = 100;
$decimal = 27.9;

$texto1 = 'Soy un texto con comillas simples '.$numero;

// Para imprimir una variable, es necesario usar comillas dobles, sin embargo son mas lentas
$texto2 = "Soy un texto con comillas dobles 
$numero";

$verdadero = true;
$vacio = null;

echo $texto1;
echo '<br>';

// Para obtener el tipo de dato
echo gettype($vacio);

echo '<br>';

// Debugear 
$nombre = 'Becca';
var_dump($nombre);

?>