<?php
require_once("Conexion.php");

class Viatico1 {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function registrarViatico1($area, $numerofolio, $fecha, $nombre, $apaterno, $amaterno, $correo, $telefono, $extension, $beneficiario, $clabe, $fk_banco, $fecha_partida_viaje, $fecha_regreso_viaje, $dias_totales, $dias_hospedaje, $dias_autorizados, $sin_hospedaje, $objetivo, $nom_comitiva, $funcion_comitiva, $fk_estado_partida_itinerario, $ciudad_partida_itinerario, $fecha_partida_itinerario, $hora_partida_itinerario, $fk_estado_llegada_itinerario, $ciudad_llegada_itinerario, $fecha_llegada_itinerario, $hora_llegada_itinerario, $tipo_transporte, $linea_aerea, $horario_avion, $linea_autobus, $horario_autobus, $placa_vehiculo_utilitario, $placa_vehiculo_particular, $gasto_hospedaje, $gasto_alimentacion, $gasto_avion, $gasto_transporte, $gasto_caseta, $gasto_gasolina, $gasto_taxi, $gasto_total, $origen_recurso) {
        
      // Escapar los datos para prevenir inyección SQL
        //lo de del primer form
        $area = $this->conexion->conexion->real_escape_string($area);
        $numerofolio = $this->conexion->conexion->real_escape_string($numerofolio);
        
        //fecha de la creacion del viatico
        $fecha = $this->conexion->conexion->real_escape_string($fecha);

        //informacion_usuario
        $nombre = $this->conexion->conexion->real_escape_string($nombre);
        $apaterno = $this->conexion->conexion->real_escape_string($apaterno);
        $amaterno = $this->conexion->conexion->real_escape_string($amaterno);
        $correo = $this->conexion->conexion->real_escape_string($correo);
        $telefono = $this->conexion->conexion->real_escape_string($telefono);
        $extension = $this->conexion->conexion->real_escape_string($extension);

        //datos_bancarios
        $beneficiario = $this->conexion->conexion->real_escape_string($beneficiario);
        $clabe = $this->conexion->conexion->real_escape_string($clabe);
        $fk_banco = $this->conexion->conexion->real_escape_string($fk_banco);

        //informacion de viaje autorizado
        $fecha_partida_viaje = $this->conexion->conexion->real_escape_string($fecha_partida_viaje);
        $fecha_regreso_viaje = $this->conexion->conexion->real_escape_string($fecha_regreso_viaje);
        $dias_totales = $this->conexion->conexion->real_escape_string($dias_totales);
        $dias_hospedaje = $this->conexion->conexion->real_escape_string($dias_hospedaje);
        $dias_autorizados = $this->conexion->conexion->real_escape_string($dias_autorizados);
        $sin_hospedaje = $this->conexion->conexion->real_escape_string($sin_hospedaje);

        //objetivo
        $objetivo = $this->conexion->conexion->real_escape_string($objetivo);

        //comitiva
        $nom_comitiva = $this->conexion->conexion->real_escape_string($nom_comitiva);
        $funcion_comitiva = $this->conexion->conexion->real_escape_string($funcion_comitiva);

        //itinerario
        $fk_estado_partida_itinerario = $this->conexion->conexion->real_escape_string($fk_estado_partida_itinerario);
        $ciudad_partida_itinerario = $this->conexion->conexion->real_escape_string($ciudad_partida_itinerario);
        $fecha_partida_itinerario = $this->conexion->conexion->real_escape_string($fecha_partida_itinerario);
        $hora_partida_itinerario = $this->conexion->conexion->real_escape_string($hora_partida_itinerario);
        $fk_estado_llegada_itinerario = $this->conexion->conexion->real_escape_string($fk_estado_llegada_itinerario);
        $ciudad_llegada_itinerario = $this->conexion->conexion->real_escape_string($ciudad_llegada_itinerario);
        $fecha_llegada_itinerario = $this->conexion->conexion->real_escape_string($fecha_llegada_itinerario);
        $hora_llegada_itinerario = $this->conexion->conexion->real_escape_string($hora_llegada_itinerario);

        //transporte
        $tipo_transporte = $this->conexion->conexion->real_escape_string($tipo_transporte);
        $linea_aerea = $this->conexion->conexion->real_escape_string($linea_aerea);
        $horario_avion = $this->conexion->conexion->real_escape_string($horario_avion);
        $linea_autobus = $this->conexion->conexion->real_escape_string($linea_autobus);
        $horario_autobus = $this->conexion->conexion->real_escape_string($horario_autobus);
        $placa_vehiculo_utilitario = $this->conexion->conexion->real_escape_string($placa_vehiculo_utilitario);
        $placa_vehiculo_particular = $this->conexion->conexion->real_escape_string($placa_vehiculo_particular);

        //gastos autorizados
        $gasto_hospedaje = $this->conexion->conexion->real_escape_string($gasto_hospedaje);
        $gasto_alimentacion = $this->conexion->conexion->real_escape_string($gasto_alimentacion);
        $gasto_avion = $this->conexion->conexion->real_escape_string($gasto_avion);
        $gasto_transporte = $this->conexion->conexion->real_escape_string($gasto_transporte);
        $gasto_caseta = $this->conexion->conexion->real_escape_string($gasto_caseta);
        $gasto_gasolina = $this->conexion->conexion->real_escape_string($gasto_gasolina);
        $gasto_taxi = $this->conexion->conexion->real_escape_string($gasto_taxi);
        $gasto_total = $this->conexion->conexion->real_escape_string($gasto_total);

        //origen del recurso
        $origen_recurso = $this->conexion->conexion->real_escape_string($origen_recurso);


        // Insertar datos en la tabla 'folio'
        $insertarFolio = "INSERT INTO folio (area, num_folio) 
        VALUES ('$area', '$numerofolio')";

        // Ejecutar consulta para insertar en 'folio'
        $this->conexion->conexion->query($insertarFolio);

        $idFolio = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'inf_usuario'
        $insertarInfUsuario = "INSERT INTO inf_usuario (nombres, apaterno, amaterno, correo, telefono, extension) 
        VALUES ('$nombre', '$apaterno', '$amaterno', '$correo', '$telefono', '$extension')";

        // Ejecutar consulta para insertar en 'inf_usuario'
        $this->conexion->conexion->query($insertarInfUsuario);

        $idInfUsuario = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'datos_bancarios'
        $insertarDatosBancarios = "INSERT INTO datos_bancarios (benficiario, clabe, fk_banco) 
        VALUES ('$beneficiario', '$clabe', '$fk_banco')";

        // Ejecutar consulta para insertar en 'datos_bancarios'
        $this->conexion->conexion->query($insertarDatosBancarios);

        $idDatosBancarios = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'inf_dias_viaje_autorizado'
        $insertarInfDiasViajeAutorizado = "INSERT INTO inf_dias_viaje_autorizados (fecha_partida, fecha_regreso, dias_totales, dias_hospedaje, dias_autorizados, sin_hospedaje) 
        VALUES ('$fecha_partida_viaje', '$fecha_regreso_viaje', '$dias_totales', '$dias_hospedaje', '$dias_autorizados', '$sin_hospedaje')";

        // Ejecutar consulta para insertar en 'inf_dias_viaje_autorizado'
        $this->conexion->conexion->query($insertarInfDiasViajeAutorizado);

        $idInfDiasViajeAutorizado = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'comitiva'
        $insertarComitiva = "INSERT INTO comitiva (nom_comitiva, funcion) 
        VALUES ('$nom_comitiva', '$funcion_comitiva')";

        // Ejecutar consulta para insertar en 'comitiva'
        $this->conexion->conexion->query($insertarComitiva);

        $idComitiva = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'itinerario'
        $insertarItinerario = "INSERT INTO itinerario (fk_estado_partida_itinerario, ciudad_partida_itinerario, fecha_partida_itinerario, hora_partida_itinerario, fk_estado_llegada_itinerario, ciudad_llegada_itinerario, fecha_llegada_itinerario, hora_llegada_itinerario) 
        VALUES ('$fk_estado_partida_itinerario', '$ciudad_partida_itinerario', '$fecha_partida_itinerario', '$hora_partida_itinerario', '$fk_estado_llegada_itinerario', '$ciudad_llegada_itinerario', '$fecha_llegada_itinerario', '$hora_llegada_itinerario')";

        // Ejecutar consulta para insertar en 'itinerario'
        $this->conexion->conexion->query($insertarItinerario);

        $idItinerario = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'transporte'
        $insertarTransporte = "INSERT INTO transporte (tipo_vehiculo, linea_aerea, horario_avion, linea_autobus, horario_autobus, placa_vehiculo_utilitario, placa_vehiculo_particular) 
        VALUES ('$tipo_transporte', '$linea_aerea', '$horario_avion', '$linea_autobus', '$horario_autobus', '$placa_vehiculo_utilitario', '$placa_vehiculo_particular')";

        // Ejecutar consulta para insertar en 'transporte'
        $this->conexion->conexion->query($insertarTransporte);

        $idTransporte = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'gastos_autorizados'
        $insertarGastosAutorizados = "INSERT INTO gastos_autorizados (gasto_hospedaje, gasto_alimentacion, gasto_avion, gasto_transporte, gasto_caseta, gasto_gasolina, gasto_taxi, gasto_total, origen_recurso) 
        VALUES ('$gasto_hospedaje', '$gasto_alimentacion', '$gasto_avion', '$gasto_transporte', '$gasto_caseta', '$gasto_gasolina', '$gasto_taxi', '$gasto_total', '$origen_recurso')";

        // Ejecutar consulta para insertar en 'gastos_autorizados'
        $this->conexion->conexion->query($insertarGastosAutorizados);

        $idGastosAutorizados = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'viaticos' con el ID de los campos como clave foránea
        $insertarViaticos = "INSERT INTO viaticos (fecha, objetivo_viaje, fk_inf_usuario, fk_datos_bancarios, fk_inf_dias_viaje_autorizados, fk_comitiva, fk_itinerario, fk_transporte, fk_gastos_autorizados) 
        VALUES ('$fecha', '$objetivo', '$idInfUsuario', '$idDatosBancarios', '$idInfDiasViajeAutorizado', '$idComitiva', '$idItinerario', '$idTransporte', '$idGastosAutorizados')";

        // Ejecutar consulta para insertar en 'usuario'
        $resultado = $this->conexion->conexion->query($insertarViaticos);

        if ($resultado) {
            return true; 
        } else {
            return false; 
        }
    }

}
?>
