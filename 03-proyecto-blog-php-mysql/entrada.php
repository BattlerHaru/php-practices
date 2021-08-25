<?php
require_once 'includes/header.php';

$entrada = conseguirEntrada( $db, $_GET['id'] );
!$entrada ? header( 'Location: index.php' ) : null;

require_once 'includes/sidebar.php';
?>

<div id="principal">
  <h1><?=$entrada['titulo']?></h1>
  <h2>categoria: <a href="categoria.php?id=<?=$entrada['categoria_id']?>"><?=$entrada['categoria']?></h2></a>
  <h4><?=$entrada['fecha']?> | autor: <?=$entrada['usuario']?></h4>
  <p><?=$entrada['descripcion']?></p>

<?php
if ( isset( $_SESSION['usuario'] ) && $_SESSION['usuario']['id'] == $entrada['usuario_id'] ):
?>
<a href="editar-entrada.php?id=<?=$entrada['id']?>" class="boton boton">Editar entrada</a>
<a href="borrar-entrada.php?id=<?=$entrada['id']?>" class="boton boton-rojo">Borrar entrada</a>
<?php endif;?>
</div>

<?php require_once 'includes/footer.php'?>
