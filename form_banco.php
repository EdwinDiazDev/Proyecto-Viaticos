<?php 
include("css_ashen.php");

?><br><br><br><br><br>

<form action="funciones/insertar_banco.php" method="post" id="formulario" class="container" enctype="multipart/form-data">
	<h1 style="color: white;">Ingresa un nuevo banco</h1>
	<label style="color: white;">Nombre del pais:</label>
	<input required type="text" name="nom_banco" class="form-control">
	
	
	<input class="btn btn-primary" type="submit" name="Guardar"><br>
</form><br><br>
