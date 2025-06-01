<?php include("encabezado_inicio_sesion.php");?>

<div class="formulario">
  <div class="title_form">
    <h2>Iniciar sesión</h2>
  </div>
  <form class="styled-form" action="funciones/validar_sesion.php" method="post">
    <div class="form-group">
      <label for="codigo_usuario">Usuario:</label>
      <input type="text" id="codigo_usuario" name="codigo_usuario" placeholder="Ingrese su nombre de usuario">
    </div>  
    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña">
    </div>
    <div class="btn_submit">
      <input class="botons" type="submit" value="Iniciar sesión">
    </div>
  </form>
</div>
<?php include("pie.php");?>
