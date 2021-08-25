<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>
<body>
    <?php 
    // include 'includes/header.php'; 
    // include_once 'includes/header.php';
    // require 'includes/header.php'; 
    require_once 'includes/header.php'; 


    ?>

   <!-- content -->
   <div >
        <h2>Esta es la pagina de sobre mi</h2>
        <p>Texto de prueba de la pagina de sobre mi</p>
    </div>
<!-- end content -->

<?php 
require_once 'includes/footer.php'; 
?>

</body>
</html>