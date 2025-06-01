<?php 
//session_start();

//if (!isset($_SESSION['pk_usuario'])) {
//  header("location: inicio_sesion.php");
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Viaticos</title>
    <link rel="stylesheet" href="assets/estilos/estilos.css">
    <link rel="stylesheet" href="assets/estilos/navbar.css">
    <link rel="stylesheet" href="assets/estilos/formularios.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>
<body>
<div id="container-navbar">
<nav>
  <div id="logo">
    <a href="index.php">
    <img src="assets/img/logo.png" alt="" srcset="">
    </a>
  </div>
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="#">Historial de formularios</a></li>
    <li class="dropdown" onmouseover="hover(this);" onmouseout="out(this);"><a href="#">Formularios &nbsp;<i class="fa fa-caret-down"></i></a>
      <div class="dd">
        <div id="up_arrow"></div>
      <ul>
        
        <li><a href="form_viaticos1.php">Responder Viaticos</a></li>
        <li><a href="#">Comprobar costos</a></li>
      </ul>
      </div>
    </li>
    <li><a href="registros_nuevos.php">Registros</a></li>

    <li class="nav-item">
      <a class="nav-link" href="funciones/cerrar_sesion.php">Cerrar sesion</a>
    </li>
    <li class="dropdown"><a href="#">Estas &nbsp;<i class="fa fa-caret-down"></i> </a>
     <div class="dd">
       <div id="u_a_c"><div id="up_arrow"></div></div>
      <ul>
        
        <li><a href="inicio_sesion.php">Iniciar sesion</a></li>
        <li><a href="registro.php">Registrarse</a></li>
      </ul>
      </div>
  </ul>
</nav>
</div>