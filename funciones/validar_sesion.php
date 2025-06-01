<?php
require_once("../clases/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoUsuario = $_POST['codigo_usuario'];
    $contrasena = $_POST['contrasena'];

    $usuario = new Usuario();

    if ($usuario->validarCredenciales($codigoUsuario, $contrasena)) {
        header("Location: ../index.php"); 
        exit();
    } else {
        echo "<meta http-equiv='REFRESH' content='0; url=../inicio_sesion.php'><script>alert('Usuario o Contraseña incorrectos') </script>";
        //header("Location: inicio_fallido.php"); //acoldalme de cambiar esto para despuesde que agreguemos pa
        exit();
    }
}
?>
