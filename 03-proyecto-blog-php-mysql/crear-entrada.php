<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="principal">
    <h1>Crear entrada</h1>
    <p>Agrega una nueva entrada para que los usuarios puedan disfrutar de una review sobre un tema en especifico, ejemplo: review, analisis, datos interesantes, etc...</p>
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
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'titulo' ) : '';
?>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="84" rows="10"></textarea>
        <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'descripcion' ) : '';
?>
        <label for="categoria">Categoria</label>
        <select name="categoria" id="">
        <?php $categorias = conseguirCategorias( $db );
if ( !empty( $categorias ) ):
    while ( $categoria = mysqli_fetch_assoc( $categorias ) ): ?>
							    <option value="<?=$categoria['id']?>"><?=$categoria['nombre']?></option>
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