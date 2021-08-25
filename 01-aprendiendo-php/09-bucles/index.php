<?php 

// Bucles

// WHILE, se ejecuta tantas veces como sea necesario
$numero = 1;
while($numero <= 10){
    echo '<p>'.$numero.'</p>';
    $numero++;
}

echo '<hr>';

// DO WHILE, se ejecuta al menos una vez

$edad = 18;
$contador = 1;
do {
    echo 'Puedes entrar, numero de intentos: '.$contador.'<br>';
    $contador++;

} while ($edad >= 18 && $contador <=3);


















?>