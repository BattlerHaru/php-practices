<?php

// Cookies
// son ficheros que se almacenan en el pc 
// del usuario para guardar, o rastrear el
// comportamiento del usuario

// cookie basica
setcookie('micookie', 'valor de mi galleta');

// cookie que dura 1 anio
setcookie('unyear', 'valor de mi galleta de 365 dias', time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver galletas</a>