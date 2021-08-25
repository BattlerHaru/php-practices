<?php 

if(isset($_POST)){
// echo '<h1>'. $_GET['nombre'].'</h1>';
// echo '<h1>'. $_GET['apellidos'].'</h1>';
echo '<h1>'. $_POST['nombre'].'</h1>';
echo '<h1>'. $_POST['apellidos'].'</h1>';

echo '<pre>';
var_dump($_POST);
echo '</pre>';
}

?>