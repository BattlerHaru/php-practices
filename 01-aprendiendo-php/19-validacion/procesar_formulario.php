<?php 


$error = true;

if(
    !empty($_POST['nombre']) 
&&  !empty($_POST['apellidos'])
&&  !empty($_POST['edad'])
&&  !empty($_POST['correo'])
&&  !empty($_POST['pass'])
){



$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];


// Validaciones
if(
    !is_string($nombre) 
||  !preg_match("/[a-zA-Z ]+/", $nombre)
){
    $error = true;
}

if(
    !is_string($apellidos) 
||  !preg_match("/[a-zA-Z ]+/", $apellidos)
){
    $error = true;
}

if(
    !is_numeric($edad) 
||  !filter_var($edad, FILTER_VALIDATE_INT)
){
    $error = true;
}

if(
    !is_string($correo) 
||  !filter_var($correo, FILTER_VALIDATE_EMAIL)
){
    $error = true;
}

if(
    !is_string($pass) 
){
    $error = true;
}

$error = false;
} else {

    $error = true;
   
}

if($error){
    header('Location:index.php?error='.$error);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <?php 
echo $nombre.'<br>';
echo $apellidos.'<br>';
echo $edad.'<br>';
echo $correo.'<br>';
echo $pass.'<br>';
    ?>
</body>
</html>