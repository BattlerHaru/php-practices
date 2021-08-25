<?php 


// crear directorios
if(!is_dir('miCarpeta')){

mkdir('miCarpeta', 0777) or die('No se puede crear la carpeta');
// 0777 = para todos los permisos

} else{
echo 'Ya existe la carpeta';
}

// rmdir('miCarpeta');

if($gestor = opendir('./miCarpeta')){
    while (false !== ($archivo =readdir($gestor))) {
        if($archivo != '.' && $archivo != '..'){
            echo '<br>'.$archivo;
        }
        
    }
}

?>