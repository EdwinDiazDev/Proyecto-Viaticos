<?php 
include("css_ashen.php");
include("clases/Pais.php");
$pais=new Pais();

$arregloDatos=$pais->mostrar();
?><br><br><br><br><br>

<form action="funciones/insertar_estado.php" method="post" id="formulario" class="container" enctype="multipart/form-data">
	<h1 style="color: white;">Ingresa un nuevo estado</h1>
	<label style="color: white;">Nombre del estado:</label>
	<input required type="text" name="nom_estado" class="form-control">

    <label style="color: white;">Pais:</label>
    <select required class="form-control" name="fk_pais">
		<option value="">Seleccione una opción</option>
		<?php
		while ($fila=mysqli_fetch_array($arregloDatos)) {
		?>
		<option value="<?=$fila['pk_pais']?>"><?=$fila["nom_pais"]?></option>
		<?php

			} 

		?>
	</select><br>
	
	
	<input class="btn btn-primary" type="submit" name="Guardar"><br>
</form><br><br>