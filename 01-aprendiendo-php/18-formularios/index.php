<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>

    <h1>Formulario</h1>

    <form action="" method="" enctype="multipart/form-data">

    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" autocomplete="off">
    </p>
    <p>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" autocomplete="off">
    </p>
    <p>
        <label for="boton">boton</label>
        <input type="button" name="boton" autocomplete="off" value="Boton">
    </p>

    <p>
        <label for="sexo">Sexo</label>
        <br>
        Hombre: <input type="checkbox" name="sexo" value="Hombre">
        Mujer: <input type="checkbox" name="sexo" value="Mujer">
    </p>

    <p>
        <label for="color">Color</label>
        <input type="color" name="color" autocomplete="off">
    </p>
    <p>
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" autocomplete="off">
    </p>

    <p>
        <label for="correo">Correo</label>
        <input type="email" name="correo" autocomplete="off">
    </p>

    <p>
        <label for="archivo">Archivo</label>
        <input type="file" name="archivo" autocomplete="off">
    </p>

    
    <p>
        <input type="hidden" name="oculto" autocomplete="off">
    </p>

    <p>
        <label for="numero">Numero</label>
        <input type="number" name="numero" autocomplete="off">
    </p>

    <p>
        <label for="pass">Password</label>
        <input type="password" name="pass" autocomplete="off">
    </p>

    <p>
        <label for="pass">Continente:</label>
        <br>
        Africa: <input type="radio" name="continente" autocomplete="off" value="Africa">
        America: <input type="radio" name="continente" autocomplete="off" value="America">
        Asia: <input type="radio" name="continente" autocomplete="off" value="Asia">
        Europa: <input type="radio" name="continente" autocomplete="off" value="Europa">
        Oceania: <input type="radio" name="continente" autocomplete="off" value="Oceania">
    </p>

    <p>
        <label for="web">Pagina Web</label>
        <input type="url" name="web" autocomplete="off">
    </p>

    <p>
        <textarea name=""></textarea>
    </p>

    <p>
        <select name="peliculas" >
            <option value="Shrek 1">Shrek 1</option>
            <option value="Shrek 2">Shrek 2</option>
            <option value="Shrek 3">Shrek 3</option>
            <option value="Shrek 4">Shrek 4</option>
            <option value="Shrek 5">Shrek 5</option>
        </select>
    </p>




    <input type="submit" value="Enviar">

    </form>

</body>
</html>


<?php 


?>