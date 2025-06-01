<?php 

include("../clases/Banco.php");

$banco=new Banco();

$nom_banco=$_POST['nom_banco'];


$respuesta=$banco->insertar($nom_banco);

if ($respuesta) {
	echo "<meta http-equiv='REFRESH' content='0; url=../form_banco.php'><script>alert('Agregada') </script>";
}else{
	echo "<meta http-equiv='REFRESH' content='0; url=../form_banco.php'><script>alert('No se registro') </script>";
}

?>