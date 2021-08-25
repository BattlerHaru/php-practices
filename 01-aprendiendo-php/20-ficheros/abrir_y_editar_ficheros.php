<?php 

// Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+" );
// a+ + permiten escribir y leer
// r = Modo de lectura
// x = Modo de ejecucion
// w = Modo de escritura 


// leer archivo
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido.'<br>';
}

// escribir 
// fwrite($archivo, '<br>Hola mi amor ♥');


// cerrar archivo
fclose($archivo);





?>