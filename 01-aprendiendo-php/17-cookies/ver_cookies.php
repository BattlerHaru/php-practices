<?php 



// mostrar cookies 

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'].'<br>';

}else{
    echo 'No existe la cookie: micookie'.'<br>';
}
if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['unyear'].'<br>';
}else{
    echo 'No existe la cookie: micookie'.'<br>';
}




?>

<a href="borrarCookies.php">Eliminar galletas</a>