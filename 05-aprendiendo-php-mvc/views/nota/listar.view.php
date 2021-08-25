<h1>Listado de notas</h1>
<?php
//array de objectos
while ( $nota = $notas->fetch_object() ):
?>
<p><?=$nota->titulo?> - <?=$nota->fecha?></p>
<?php
endwhile;
?>
