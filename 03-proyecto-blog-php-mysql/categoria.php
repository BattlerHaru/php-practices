<?php
require_once 'includes/header.php';

$categoria = conseguirCategoria( $db, $_GET['id'] );
!$categoria ? header( 'Location: index.php' ) : null;

require_once 'includes/sidebar.php';
?>

<div id="principal">
  <h1>Entradas de:&nbsp;<?=$categoria?></h1>
  <?php $entradas =
    conseguirEntradas( $db, $_GET['id'] );
if ( !empty( $entradas ) ):
    while ( $entrada = mysqli_fetch_assoc( $entradas ) ):
    ?>
							  <article class="entrada">
					    <hr />
					    <a href="entrada.php?id=<?=$entrada['id']?>"
					      ><h2><?=$entrada['titulo']?></h2></a
					    >
					    <span class="fecha"
					      ><a href="categoria.php?id=<?=$entrada['categoria_id']?>"
							><?=$entrada['categoria'] . '</a
							> | ' . $entrada['fecha']?></span
					    >
					    <p><?=substr( $entrada['descripcion'], 0, 250 ) . '...'?></p>
					  </article>

							  <?php
endwhile;
else: ?>
<div class="alerta">No hay entradas para esta categoria</div>
  <?php endif;?>

  <div id="ver-todas">
    <a href="entradas.php?categoria=<?=$_GET['id']?>">Ver todas las entradas</a>
  </div>
</div>

<?php require_once 'includes/footer.php'?>
