<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>



<div id="principal">
    <h1>Crear categorias</h1>
    <p>Agrega nuevas categorias al blog para que los usuarios vean mas contenido</p>
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
    <form action="guardar-categoria.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'nombre' ) : '';
?>
        <input type="submit" name="submit" value="Guardar" />
    </form>
    <?php
( isset( $_SESSION['errores'] ) || isset( $_SESSION['completado'] ) )
? borrarErrores()
: '';?>

<?php require_once 'includes/footer.php'?>