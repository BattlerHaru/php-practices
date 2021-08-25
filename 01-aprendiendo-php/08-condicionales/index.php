<?php 

$cancion = 'Todo de ti';


// Condicionales

/* 
Operadores de comparacion
    == igual
    === exactamente igual
    != diferente
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que

Operadores logicos
    && Y
    || O
    ! NOT
*/

// if, else, else if

if($cancion === 'Que nivel de mujer'){
    echo 'La cancion no es: Todo de ti';
} else if( $cancion === 'Todo de ti'){
    echo 'La cancion es: '.$cancion;
} else {
    echo 'La cancion no esta en la lista';
}

echo '<hr>';

// Switch
$dia = "Viernes";
switch ($dia) {
    case 'Lunes':
        echo 'Hoy es: '.$dia;
        break;
    case 'Martes':
        echo 'Hoy es: '.$dia;
         break;
    case 'Miercoles':
        echo 'Hoy es: '.$dia;
        break;
    case 'Jueves':
        echo 'Feliz '.$dia;
        break;
    case 'Viernes':
        echo 'Gracias a dios es '.$dia;
         break;
    case 'Sabado':
        echo 'Hoy es: Sabadogo';
        break;
    default:
        echo 'Hoy es: Domingo';
        break;
}

echo '<hr>';

// GOTO
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';


marca: 
echo 'Me he saltado 4 echos';







?>