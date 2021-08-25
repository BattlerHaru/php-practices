<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir.php">
        <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" autocomplete="off">
        </p>

        <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" autocomplete="off">
        </p>

        <input type="submit" value="Enviar Datos">
    </form>
</body>
</html>