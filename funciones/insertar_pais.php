<?php 

include("../clases/Pais.php");

$pais=new Pais();

$nom_pais=$_POST['nom_pais'];


$respuesta=$pais->insertar($nom_pais);

if ($respuesta) {
	echo "<meta http-equiv='REFRESH' content='0; url=../form_pais.php'><script>alert('Agregada') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../form_pais.php'><script>alert('No se registro') </script>";
}

?>