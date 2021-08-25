<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php 
        if(isset($_GET['error'])){
            echo "<strong>Introduce todos los datos del formulario</strong>";
        }
    ?>

    <form action="procesar_formulario.php" method="post">

    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" autocomplete="off" required="required" pattern="[A-Za-z ]+">
    </p>
    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" autocomplete="off" required="required" pattern="[A-Za-z ]+">
    </p>
    <p>
        <label for="edad">Edad</label>
        <input type="number" name="edad" autocomplete="off" required="required" pattern="[0-9]+">
    </p>
    <p>
        <label for="correo">Correo</label>
        <input type="email" name="correo" autocomplete="off" required="required">
    </p>
    <p>
        <label for="pass">Password</label>
        <input type="pass" name="pass" autocomplete="off" required="required" >
    </p>

    <input type="submit" value="Enviar">

    </form>
</body>
</html>