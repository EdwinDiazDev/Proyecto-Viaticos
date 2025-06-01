<?php 

include("../clases/Ciudad.php");

$ciudad=new Ciudad();

$nom_ciudad=$_POST['nom_ciudad'];
$fk_estado=$_POST['fk_estado'];

$respuesta=$ciudad->insertar($nom_ciudad, $fk_estado);

if ($respuesta) {
	echo "<meta http-equiv='REFRESH' content='0; url=../form_ciudad.php'><script>alert('Agregado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../form_ciudad.php'><script>alert('No se registro') </script>";
}

?>