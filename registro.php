<?php include("encabezado.php");?>

<div class="formulario">
  <div class="title_form">
    <h2>Registrarse</h2>
  </div>
  <form class="styled-form" action="funciones/validar_usuario.php" method="post">
    <div class="form-group">
      <label for="codigo_usuario">Usuario:</label>
      <input type="text" id="codigo_usuario" name="usuario" placeholder="Ingrese su nombre de usuario">
    </div>
    <div class="form-group">
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre completo">
    </div>
    <div class="form-group form-flex">
      <div class="form-half">
        <label for="apellido_paterno">Apellido paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Ingrese su apellido paterno">
      </div>
      <div class="form-half">
        <label for="apellido_materno">Apellido materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Ingrese su apellido materno">
      </div>
    </div>
    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="number" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
    </div>
    <div class="form-group">
      <!-- Mover el mensaje de "Sexo" aquí -->
      <label>Sexo:</label>
      <select name="sexo" id="">  
        <option value="">Seleccione una opcion</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña">
    </div>
    <div class="btn_submit">
      <input class="botons" type="submit" value="Registrarse">
    </div>
  </form>
</div>
<?php include("pie.php");?>
