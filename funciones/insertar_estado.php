<?php 

include("../clases/Estado.php");

$estado=new Estado();

$nom_estado=$_POST['nom_estado'];
$fk_pais=$_POST['fk_pais'];

$respuesta=$estado->insertar($nom_estado, $fk_pais);

if ($respuesta) {
	echo "<meta http-equiv='REFRESH' content='0; url=../form_estado.php'><script>alert('Agregado') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../form_estado.php'><script>alert('No se registro') </script>";
}

?>