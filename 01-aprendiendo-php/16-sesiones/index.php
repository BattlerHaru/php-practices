<?php 

// Session
// Almacenar y persistir datos del usuario
// mientras navega por el sitio hasta cerrar 
// la sesion o el navegador

// Iniciar la sesion
session_start();

// Variable local
$variable_normal = 'Soy una cadena de texto';

// Variable de session
$_SESSION['variable_persistente'] = 'Hola soy una session activa';

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'].'<br>';

?>