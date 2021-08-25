<?php 

$variable = "Holi";

// debugear 
echo '<pre>';
var_dump($variable);
echo '</pre>';

echo '<hr>';

// fechas 
echo date('d-m-Y');

echo '<hr>';

// numero que jamas se va a repetir
echo time();

echo '<hr>';

// Matematicas
echo 'Raiz Cuadrada de 25 es: '.sqrt(10);
echo '<hr>';

echo 'Numero aleatoreo: '.rand(0,10);
echo '<hr>';

echo 'Numero pi: '.pi();
echo '<hr>';

echo 'Redondear 2.897: '.round(2.897, 2);
echo '<hr>';

// Mas funciones

echo 'tipo de dato: '.gettype($variable);
echo '<hr>';

echo 'es un string? : '.is_string($variable);
echo '<hr>';

echo 'existe $Holo : '.isset($Holo);
echo '<hr>';

$frase = ' Un      gran poder conlleva una gran responsabilidad ';

echo 'frase: '.trim($frase);
echo '<hr>';

// Eliminar variables
$year = 2021;

echo $year;

unset($year);

echo $year;
echo '<hr>';

// Comprobar si esta vacia

$dato = '';
if(empty($dato)){
    echo 'Esta vacio';
} else {
    echo 'tiene data';
}

echo '<hr>';

$nombre = 'becca';
echo 'numero de caracteres de:'.$nombre.' : '.strlen($nombre);

echo '<hr>';


echo 'encontrar caracteres: '.strpos($frase, 'poder');
echo '<hr>';

echo 'reemplazar caracteres: '.str_replace('poder', 'fierro', $frase);
echo '<hr>';

echo 'Mayus: '.strtoupper($nombre);
echo '<hr>';

echo 'Minus: '.strtolower($nombre);
echo '<hr>';


?>