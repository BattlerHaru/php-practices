<?php
require_once 'includes/redirect.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>


<div id="principal">
    <h1>Mis datos</h1>
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

    <form action="actualizar-datos.php" method="post">
      <label for="nombre">Nombre</label>
      <input value="<?=$_SESSION['usuario']['nombre']?>"
      type="text" name="nombre" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'nombre' ) : '';
?>
      <label for="apellidos">Apellidos</label>
      <input value="<?=$_SESSION['usuario']['apellidos']?>"
      type="text" name="apellidos" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'apellidos' ) : '';
?>
      <label for="email">Email</label>
      <input value="<?=$_SESSION['usuario']['email']?>"
      type="email" name="email" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'email' ) : '';
?>
      <label for="pass">Password</label>
      <input type="password" name="pass" autocomplete="off" />
      <input type="submit" name="submit" value="guardar" />
    </form>
    <?php
( isset( $_SESSION['errores'] ) || isset( $_SESSION['completado'] ) )
? borrarErrores()
: '';?>

<?php require_once 'includes/footer.php'?>