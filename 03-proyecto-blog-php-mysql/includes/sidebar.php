<aside id="sidebar">

<div id="buscador" class="bloque">
		<h3>Buscar</h3>

		<form action="buscar.php" method="POST">
			<input type="text" name="busqueda" />
			<input type="submit" value="Buscar" />
		</form>
	</div>

  <?php if ( isset( $_SESSION['usuario'] ) ): ?>
  <div id="usuario-logueado" class="bloque">
    <h3>
      Bienvenid@,
      <?=$_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'];?>
      <!-- Buttons -->
      <a href="crear-entrada.php" class="boton boton-verde">Crear entradas</a>
      <a href="crear-categoria.php" class="boton">Crear categoria</a>
      <a href="mis-datos.php" class="boton boton-naranja">mis datos</a>
      <a href="logout.php" class="boton boton-rojo">Cerrar sesion</a>
    </h3>
  </div>
  <?php endif;?>

  <?php if ( isset( $_SESSION['error_login'] ) ): ?>
  <div id="alerta alerta-error" class="bloque">
    <?=$_SESSION['error_login']?>
  </div>
  <?php endif;?>

  <?php if ( !isset( $_SESSION['usuario'] ) ): ?>
  <div id="login" class="bloque">
    <h3>Identificate</h3>
    <form action="login.php" method="post">
      <label for="email">Email</label>
      <input type="email" name="email" autocomplete="off" />
      <label for="pass">Password</label>
      <input type="password" name="pass" autocomplete="off" />
      <input type="submit" value="Entrar" />
    </form>
  </div>

  <div id="register" class="bloque">
    <h3>Registrate</h3>
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

    <form action="register.php" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'nombre' ) : '';
?>
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'apellidos' ) : '';
?>
      <label for="email">Email</label>
      <input type="email" name="email" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'email' ) : '';
?>
      <label for="pass">Password</label>
      <input type="password" name="pass" autocomplete="off" />
      <?php
echo isset( $_SESSION['errores'] ) ? mostrarError( $_SESSION['errores'], 'pass' ) : '';
?>
      <input type="submit" name="submit" value="Registrar" />
    </form>
    <?php
( isset( $_SESSION['errores'] ) || isset( $_SESSION['completado'] ) )
? borrarErrores()
: '';?>
  </div>
  <?php endif;?>
</aside>
