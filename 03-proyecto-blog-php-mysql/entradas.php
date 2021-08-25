<?php
require_once 'includes/header.php';

if ( !empty( $_GET['categoria'] ) ) {
    $categoria = conseguirCategoria( $db, $_GET['categoria'] );
    !$categoria ? header( 'Location: index.php' ) : null;
}

require_once 'includes/sidebar.php';
?>

<div id="principal">
  <h1>Todas las entradas<?php echo $categoria ? 'de: ' . $categoria : '' ?></h1>
  <?php
$categoria_id = false;
!empty( $_GET['categoria'] ) ? $categoria_id = $_GET['categoria'] : null;
$entradas = conseguirEntradas( $db, $categoria_id );
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
