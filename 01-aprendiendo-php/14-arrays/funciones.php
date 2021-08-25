<?php 


$personajes = array("Gwen Stacy", "Felicia Hardy", "Mary Jane");

echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

// Ordenar elementos
echo '<h2>asort: Orden alfabetico</h2>';
asort($personajes);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

echo '<h2>sort: Orden alfabetico y numerico</h2>';
sort($personajes);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';


echo '<h2>arsort: Orden alfabetico inverso</h2>';
arsort($personajes);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

// Agregar elementos
echo '<h2>[]: Agregar datos</h2>';
$personajes[] = 'Cindy Moon';
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

echo '<h2>push: Agregar datos</h2>';
array_push($personajes, 'Jessica Drew');
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

// quitar elementos
echo '<h2>pop: Quitar datos, ultimo elemento</h2>';
array_pop($personajes);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

echo '<h2>pop: Quitar datos,elemento especifico</h2>';
unset($personajes[2]);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

// Aleatoreo

echo '<h2>rand: elemento random</h2>';
echo $personajes[array_rand($personajes)];
echo '<hr>';


// dar la vuelta al array;
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

echo '<h2>reverse: voltear array</h2>';
$personajes = array_reverse($personajes);
echo '<pre>';
var_dump($personajes);
echo '</pre>';
echo '<hr>';

// Buscar en un array

echo '<h2>search: voltear array</h2>';
$busqueda = array_search('Felicia Hardy',$personajes);
echo $busqueda;
echo '<pre>';
var_dump($personajes[$busqueda]);
echo '</pre>';
echo '<hr>';


// Contar numero de elementos
echo '<h2>count: numero de elementos</h2>';
echo count($personajes);
echo '<hr>';

// Contar numero de elementos
echo '<h2>sizeof: numero de elementos</h2>';
echo sizeof($personajes);
echo '<hr>';
?>