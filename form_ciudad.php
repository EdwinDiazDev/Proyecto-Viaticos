<?php 
include("css_ashen.php");
include("clases/Estado.php");
$estado=new Estado();

$arregloDatos=$estado->mostrar();
?><br><br><br><br><br>

<form action="funciones/insertar_ciudad.php" method="post" id="formulario" class="container" enctype="multipart/form-data">
	<h1 style="color: white;">Ingresa una nueva ciudad</h1>
	<label style="color: white;">Nombre de la ciudad:</label>
	<input required type="text" name="nom_ciudad" class="form-control">

    <label style="color: white;">Estado:</label>
    <select required class="form-control" name="fk_estado">
		<option value="">Seleccione una opción</option>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<option value="<?=$fila['pk_estado']?>"><?=$fila["nom_estado"]?></option>
		<?php

			} 

		?>
	</select><br>
	
	
	<input class="btn btn-primary" type="submit" name="Guardar"><br>
</form><br><br>