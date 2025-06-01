<?php

require_once("../clases/Viatico1.php");

$viatico1 = new Viatico1();

// lo primero del form
$area = $_POST['area'];
$numerofolio = $_POST['numero'];

//fecha del viatico del dia
// Establecer la zona horaria a la deseada (por ejemplo, 'America/Buenos_Aires')
date_default_timezone_set('America/Mazatlan');
// Obtener la fecha actual
$fecha = date("Y-m-d");

//informacion usuario
$nombre = $_POST['nombres'];
$apaterno = $_POST['apellido_paterno'];
$amaterno = $_POST['apellido_materno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$estension = $_POST['estension'];

//datos bancarios
$beneficiario = $_POST['beneficiario'];
$clabe = $_POST['clabe'];
$fk_banco = $_POST['fk_banco'];

//informacion de viaje autorizado
$fecha_partida_viaje = $_POST['fecha_partida_viaje'];
$fecha_regreso_viaje = $_POST['fecha_regreso_viaje'];
$dias_totales = $_POST['dias_totales'];
$dias_hospedaje = $_POST['dias_hospedaje'];
$dias_autorizados = $_POST['dias_autorizados'];
$sin_hospedaje = $_POST['sin_hospedaje'];

//obejtivo
$objetivo = $_POST['objetivo'];

//comitiva
$nom_comitiva = $_POST['nombre_comitiva'];
$funcion_comitiva = $_POST['funcion_comitiva'];

//itinerario
$fk_estado_partida_itinerario = $_POST['fk_estado_partida_itinerario'];
$ciudad_partida_itinerario = $_POST['ciudad_partida_itinerario'];
$fecha_partida_itinerario = $_POST['fecha_partida_itinerario'];
$hora_partida_itinerario = $_POST['hora_partida_itinerario'];
$fk_estado_llegada_itinerario = $_POST['fk_estado_llegada_itinerario'];
$ciudad_llegada_itinerario = $_POST['ciudad_llegada_itinerario'];
$fecha_llegada_itinerario = $_POST['fecha_llegada_itinerario'];
$hora_llegada_itinerario = $_POST['hora_llegada_itinerario'];

//Transporte
$tipo_transporte = $_POST['tipo_transporte'];
$linea_aerea = $_POST['linea_aerea'];
$horario_avion = $_POST['horario_avion'];
$linea_autobus = $_POST['linea_autobus'];
$horario_autobus = $_POST['horario_autobus'];
$placa_vahiculo_utilitario = $_POST['placa_vahiculo_utilitario'];
$placa_vahiculo_particular = $_POST['placa_vahiculo_particular'];

//gastos autorizados
$gasto_hospedaje = $_POST['gasto_hospedaje'];
$gasto_alimentacion = $_POST['gasto_alimentacion'];
$gasto_avion = $_POST['gasto_avion'];
$gasto_transporte = $_POST['gasto_transporte'];
$gasto_caseta = $_POST['gasto_caseta'];
$gasto_gasolina = $_POST['gasto_gasolina'];
$gasto_taxi = $_POST['gasto_taxi'];
$gasto_total = $_POST['gasto_total'];

//origen del recurso
$origen_recurso = $_POST['origen_recurso'];






if ($viatico1->registrarViatico1($area, $numerofolio, $fecha, $nombre, $apaterno, $amaterno, $correo, $telefono, $estension, $beneficiario, $clabe, $fk_banco, $fecha_partida_viaje, $fecha_regreso_viaje, $dias_totales, $dias_hospedaje, $dias_autorizados, $sin_hospedaje, $objetivo, $nom_comitiva, $funcion_comitiva, $fk_estado_partida_itinerario, $ciudad_partida_itinerario, $fecha_partida_itinerario, $hora_partida_itinerario, $fk_estado_llegada_itinerario, $ciudad_llegada_itinerario, $fecha_llegada_itinerario, $hora_llegada_itinerario, $tipo_transporte, $linea_aerea, $horario_avion, $linea_autobus, $horario_autobus, $placa_vahiculo_utilitario, $placa_vahiculo_particular, $gasto_hospedaje, $gasto_alimentacion, $gasto_avion, $gasto_transporte, $gasto_caseta, $gasto_gasolina, $gasto_taxi, $gasto_total, $origen_recurso)) {
    echo "<meta http-equiv='REFRESH' content='0; url=../form_viaticos1.php'><script>alert('Se agrego con éxito') </script>";
    exit();
} else {
    
    echo "<meta http-equiv='REFRESH' content='0; url=../form_viaticos1.php'><script>alert('Falló exitosamente') </script>";
    exit();
}
?>
