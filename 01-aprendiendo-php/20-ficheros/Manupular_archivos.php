<?php 

// Copiar
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// Renombrar
// rename('fichero_copiado.txt', 'speedrun_chiquito.txt');

// Eliminar archivos
// unlink('speedrun_chiquito.txt') or die('Error al eliminar')

// ver si existe
if(file_exists('fichero_texto.txt')){
    echo "El Archivo existe";
} else{
    echo "El Archivo NO existe";

}

?>