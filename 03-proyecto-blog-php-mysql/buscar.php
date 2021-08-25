<?php
if ( !isset( $_POST['busqueda'] ) ) {
    header( "Location: index.php" );
}

$busqueda = $_POST['busqueda'];
?>
<?php require_once 'includes/header.php';?>
<?php require_once 'includes/sidebar.php';?>



<div id="principal">
  <h1>Buscar: <?=$busqueda?></h1>
  <?php

$entradas = conseguirEntradas( $db, false, false, $busqueda );
if ( !empty( $entradas ) ):
    while ( $entrada = mysqli_fetch_assoc( $entradas ) ):
    ?>
	<article class="entrada">
	    <hr />
	    <a href="entrada.php?id=<?=$entrada['id']?>"><h2><?=$entrada['titulo']?></h2></a>
	    <span class="fecha"><a href="categoria.php?categoria=<?=$entrada['categoria_id']?>"><?=$entrada['categoria'] . '</a> | ' . $entrada['fecha']?></span>
	    <p><?=substr( $entrada['descripcion'], 0, 250 ) . '...'?></p>
	</article>
					    <?php
endwhile;
endif;
?>

  <?php require_once 'includes/footer.php'?>
</div>
