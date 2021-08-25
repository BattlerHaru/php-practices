<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="principal">
  <h1>Ultimas entradas</h1>
  <?php $entradas = conseguirEntradas( $db, false, 4 );
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
endif;
?>
  <div id="ver-todas">
    <a href="entradas.php">Ver todas las entradas</a>
  </div>

  <?php require_once 'includes/footer.php'?>
</div>
