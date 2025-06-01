<?php

require_once("../clases/Usuario.php");


$codigo = $_POST['usuario'];
$nombres = $_POST['nombres'];
$apaterno = $_POST['apellido_paterno'];
$amaterno = $_POST['apellido_materno'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$contrasena = $_POST['contrasena'];


$usuario = new Usuario();


if ($usuario->registrarUsuario($codigo, $nombres, $apaterno, $amaterno, $telefono, $sexo, $contrasena)) {
    
    header("Location: ../registro.php");
    exit();
} else {
    
    header("Location: registro_fallido.php");
    exit();
}
?>
