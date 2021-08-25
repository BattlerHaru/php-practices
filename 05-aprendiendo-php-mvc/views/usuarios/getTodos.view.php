<h1>Listado de usuarios</h1>
<?php
//array de objectos
while ( $usuario = $getTodos->fetch_object() ):
?>
<p><?=$usuario->nombre?> <?=$usuario->apellidos?> - <?=$usuario->email?></p>
<?php
endwhile;
?>
