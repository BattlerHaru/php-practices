<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';

$entrada = conseguirEntrada( $db, $_GET['id'] );
!$entrada ? header( 'Location: index.php' ) : null;

require_once 'includes/sidebar.php';
?>

<div id="principal">
  <h1>Editar entrada</h1>
  <!-- Mostrar errores -->
  <?php if ( isset( $_SESSION['completado'] ) ): ?>
  <div class="alerta alerta-exito">
    <?=$_SESSION['completado']?>
  </div>
  <?php
elseif ( isset( $_SESSION['errores']['general'] ) ):
?>
  <div class="alerta alerta-error">
    <?=$_SESSION['errores']['general']?>
  </div>
  <?php endif;?>
  <!-- end Mostrar errores -->
  <form action="guardar-entrada.php" method="post">
      <input type="hidden" name="entrada_id" value="<?=$entrada['id']?>">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" value="<?=$entrada['titulo']?>" />
    <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'titulo' ) : '';
?>
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" cols="84" rows="10"><?=$entrada['descripcion']?></textarea>

    <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'descripcion' ) : '';
?>

    <label for="categoria">Categoria</label>
    <select name="categoria" id="">
      <?php $categorias = conseguirCategorias( $db );
if ( !empty( $categorias ) ):
    while ( $categoria = mysqli_fetch_assoc( $categorias ) ): ?>

	<option <?php echo $categoria['id'] == $entrada['categoria_id'] ? 'selected="selected"' : ''; ?>
	    value="<?=$categoria['id']?>"><?=$categoria['nombre']?></option>
	    <?php endwhile;
endif;?>
    </select>
    <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'categoria' ) : '';
?>
    <input type="submit" name="submit" value="Guardar" />
  </form>
  <?php
( isset( $_SESSION['errores'] ) || isset( $_SESSION['completado'] ) )
? borrarErrores()
: '';?>
  <?php require_once 'includes/footer.php'?>
</div>
