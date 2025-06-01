<?php include("encabezado.php"); 

include("clases/Banco.php");
$banco=new Banco();

$arregloBanco=$banco->mostrar();

include("clases/Estado.php");
$estado=new Estado();

$arregloEstado=$estado->mostrar();
$arregloEstado2=$estado->mostrar();

?>

<div class="header_form">
  <div class="title_header_form">
    <h1>UNIVERSIDAD TECNOLÓGICA DE ESCUINAPA</h1>
  </div>
  <div class="sub_title_header_form">
    <p>SUBDIRECCION  DE ADMINISTRACIÓN Y FINANZAS</p>
    <p>RECURSOS HUMANOS</p>
  </div>
</div>

<div class="formulario_viaticos">
  <div class="title_form">
    <h2>OFICIO DE COMISION Y SOLICITUD DE VIÁTICOS</h2>
  </div>
  
  <form class="styled-form" action="funciones/insertar_viatico1.php" method="post">
    <!-- Informacion formulario -->
      <div class="form-flex form-group">
        <div class="form-group form-half-25 text_center">
          <label for="area">ÁREA</label>
          <input type="text" id="area" name="area" placeholder="Ingresar área" required>
        </div>
        <div class="form-group form-half-25 text_center">
          <label for="numero">NO (Uso Exclusivo del Depto).</label>
          <input type="text" id="numero" name="numero" placeholder="Ingresar número" required>
        </div>
      </div>


 <!-- Primer bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Información de usuario:</h2>
  
  <!-- Primera columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="apellido_paterno">Apellido paterno:</label>
      <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Ingresar apellido paterno" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="apellido_materno">Apellido materno:</label>
      <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Ingresar apellido materno" required>
    </div>
  </div>
  
  <!-- Segunda columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" placeholder="Ingresar correo electronico" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="Ingresar teléfono" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="telefono_extra">Extensión:</label>
      <input type="text" id="extencion" name="extension" placeholder="Ingresar extensión telefónica">
    </div>
  </div>
</div>


<!-- Segundo bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Datos bancarios:</h2>
  
  <!-- Primera columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="beneficiario">Beneficiario:</label>
      <input type="text" id="beneficiario" name="beneficiario" placeholder="Ingresar beneficiario" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="clave">Clabe:</label>
      <input type="text" id="clave" name="clabe" placeholder="Ingresar clave" required>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="departamento">Banco:</label>
      <select class="form-control" name="fk_banco" required>
        <option value="">Seleccione una opción</option>
        <?php
          while ($fila=mysqli_fetch_array($arregloBanco)) {
        ?>
        <option value="<?=$fila['pk_banco']?>"><?=$fila["nom_banco"]?></option>
        <?php
          } 
        ?>
      </select><br>
    </div>
  </div>
</div>


    <!-- Tercer bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Información días de viaje autorizados:</h2>
  <!-- Primera columna del segundo bloque -->
  <div class="form-flex form-group">
    <div class="form-group form-half-25 text_center">
      <label for="fecha_partida">Fecha de partida:</label>
      <input type="date" id="fecha_partida" name="fecha_partida_viaje" placeholder="Ingresar fecha de partida" required>
    </div> 
    <div class="form-group form-half-25 text_center">
      <label for="fecha_regreso">Fecha de regreso:</label>
      <input type="date" id="fecha_regreso" name="fecha_regreso_viaje" placeholder="Ingresar fecha de regreso" required>
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="dias_totales">Dias totales:</label>
      <input type="text" id="dias_totales" readonly name="dias_totales" placeholder="Dias total">
    </div>
    <div class="form-group form-half-25 text_center">
        <label for="sin_hospedaje">Dias de hospedaje:</label>
        <select id="con_hospedaje" name="dias_hospedaje" onchange="calcularDiasTotales()" required>
            <!-- Opciones del select -->
            <option value="0">Seleccione los dias de hospedaje</option>
            <!-- Opciones del select -->
            <script>
                for (var i = 0; i <= 9; i++) {
                  document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
    </div>
    <div class="form-group form-half-25 text_center">
        <label for="dias_autorizados">Días Autorizados:</label>
        <select id="dias_autorizados" name="dias_autorizados" onchange="calcularDiasTotales()" required>
        <option value="0">Seleccione los dias autorizados</option>
            <!-- Opciones del select -->
            <script>
                for (var i = 0; i <= 9; i++) {
                  document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
    </div>
    <div class="form-group form-half-25 text_center">
        <label for="sin_hospedaje_2">Sin Hospedaje:</label>
        <select id="sin_hospedaje_2" name="sin_hospedaje" onchange="calcularDiasTotales()" required>
            <!-- Opciones del select -->
            <option value="0">Seleccione los dias sin hospedaje</option>
            <script>
                for (var i = 0; i <= 9; i++) {
                  document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function calcularDiasTotales() {
                var diasTotales = parseInt(document.getElementById("dias_totales").value) || 0;
                var conHospedaje = parseInt(document.getElementById("con_hospedaje").value) || 0;
                var diasAutorizados = parseInt(document.getElementById("dias_autorizados").value) || 0;
                var sinHospedaje = parseInt(document.getElementById("sin_hospedaje_2").value) || 0;

                var sumaDias = conHospedaje + diasAutorizados + sinHospedaje;

                // Verificar si la suma excede los días totales
                if (sumaDias > diasTotales) {
                    alert("La suma de los días seleccionados no puede ser mayor que los días totales.");
                } else {
                    document.getElementById("mensaje_error").innerHTML = "";
                }
            }

            // Asignar la función a los eventos de cambio en los selects
            document.getElementById("con_hospedaje").addEventListener("change", calcularDiasTotales);
            document.getElementById("dias_autorizados").addEventListener("change", calcularDiasTotales);
            document.getElementById("sin_hospedaje_2").addEventListener("change", calcularDiasTotales);
        });
    </script>

  </div>
  <!-- Segunda columna del segundo bloque -->
  <div class="form-flex form-group">
    <div class="form-group form-half-100 text_center">
      <label for="objetivo">Objetivo del viaje:</label>
      <textarea name="objetivo" id="" cols="8" placeholder="Ej: Entrega de transferencia electrónica por donación a Teleton 2022 de trabajadores de la Utesc" rows="8" required></textarea>
    </div>
  </div>
</div>


   <!-- Cuarto bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Comitiva:</h2>
  <div id="campos-comitiva">
    <!-- Campos de Nombre y Select -->
    <div class="form-flex form-group">
      <div class="form-group form-half-100 text_center">
        <label for="nombre_comitiva">Nombre:</label>
        <input type="text" name="nombre_comitiva" placeholder="Nombre de la comitiva" required>
      </div>
      <div class="form-group form-half-100 text_center">
        <label for="comitiva">Función:</label>
        <select name="funcion_comitiva" placeholder="Seleccionar función" required>
          <!-- Opciones del select -->
          <option value="">Seleccione una opción</option>
          <option value="Invitado especial">Invitado especial</option>
          <option value="Organizador">Organizador</option>
          <option value="Representante">Representante</option>
          <option value="Staff">Staff</option>
          <option value="Chofer">Chofer</option>
          <option value="Participante">Participante</option>
          <option value="Alumno">Alumno</option>
          <option value="Comisionado">Comisionado</option>
        </select>
      </div>
      <div class="form-group form-half-25 text_center">
        <button type="button" id="eliminar-campos-comitiva" class="eliminar-campos-comitiva">Eliminar</button>
      </div>
    </div>
  </div>
  <button type="button" class="agregar-campos-comitiva" id="agregar-campos-comitiva">Agregar Campos</button>
</div>


<!-- Quinto bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Itinerario:</h2>
  <!-- Primera columna -->

  <button type="button" class="agregar-campos-itinerario" id="agregar-campos-itinerario">Añadir otro itinerario</button>

  <div class="form-flex form-group">
    <div class="form-group form-half-100 text_center">
      <div class="table-container">
        <table border="1">
          <colgroup span="2"></colgroup>
          <colgroup span="9"></colgroup>
          <colgroup span="1"></colgroup>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th colspan="4" style="text-align: center">Salida</th>
              <th colspan="4" style="text-align: center">Llegada</th>
            </tr>
            <tr>
              <th>No:</th>
              <th>País</th>
              <th>Estado:</th>
              <th>Ciudad:</th>
              <th>Fecha:</th>
              <th>Hora:</th>
              <th>Estado:</th>
              <th>Ciudad:</th>
              <th>Fecha:</th>
              <th>Hora:</th>
              <th>Acciones:</th>
            </tr>
          </thead>
          <tbody>
            <!-- Agrega la clase 'fila-itinerario' a la primera fila -->
            <tr class="fila-itinerario">
              <th>1</th>
              <td><input type="text" name="pais[]"></td>
              <td><input type="text" name="estado_llegada[]"></td>
              <td><input type="text" name="ciudad_llegada[]"></td>
              <td><input type="date" name="fecha_llegada[]"></td>
              <td><input type="time" name="hora_llegada[]"></td>
              <td><input type="text" name="estado_salida[]"></td>
              <td><input type="text" name="ciudad_salida[]"></td>
              <td><input type="date" name="fecha_salida[]"></td>
              <td><input type="time" name="hora_salida[]"></td>
              <td><button type="button" id="eliminar-campos-itinerario" class="eliminar-campos-itinerario">Eliminar</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var botonAgregar = document.getElementById('agregar-campos-itinerario');
    var tablaItinerario = document.querySelector('.table-container tbody');

    botonAgregar.addEventListener('click', function () {
        // Clonar la primera fila
        var primeraFila = document.querySelector('.fila-itinerario');
        var nuevaFila = primeraFila.cloneNode(true);

        // Incrementar el número y actualizar los atributos de los campos
        var contadorItinerario = tablaItinerario.children.length + 1;
        nuevaFila.querySelector('th').innerText = contadorItinerario;
        nuevaFila.querySelectorAll('input').forEach(function (input) {
            input.name = input.name.replace(/\[\d+\]/, '[' + contadorItinerario + ']');
            input.value = ''; // Limpiar los valores de los campos clonados
        });

        // Agregar la nueva fila a la tabla
        tablaItinerario.appendChild(nuevaFila);

        // Asignar evento de clic al botón "Eliminar" de la nueva fila
        var botonEliminar = nuevaFila.querySelector('.eliminar-campos-itinerario');
        botonEliminar.addEventListener('click', function () {
            tablaItinerario.removeChild(nuevaFila);
            // Actualizar números de fila después de eliminar
            actualizarNumerosFila();
        });
    });

    // Asignar evento de clic a todos los botones "Eliminar" existentes, incluido el original
    var botonesEliminar = document.querySelectorAll('.eliminar-campos-itinerario');
    botonesEliminar.forEach(function (boton) {
        boton.addEventListener('click', function () {
            tablaItinerario.removeChild(boton.closest('.fila-itinerario'));
            // Actualizar números de fila después de eliminar
            actualizarNumerosFila();
        });
    });

    function actualizarNumerosFila() {
        var filas = tablaItinerario.children;
        for (var i = 0; i < filas.length; i++) {
            filas[i].querySelector('th').innerText = i + 1;
        }
    }
});
</script>




   <!-- Sexto bloque -->
<div class="form-group-viaticos">
    <h2 class="content_text">Transporte:</h2>
    <!-- Selección del tipo de transporte -->
    <div class="form-flex form-group">
        <div class="form-group form-half-50 text_center">
            <label for="tipo_transporte">Tipo de Transporte:</label>
            <select id="tipo_transporte" name="tipo_transporte" onchange="mostrarCamposTransporte()" >
                <option value="">Seleccione una opción</option>
                <option value="avion">Avión</option>
                <option value="autobus">Autobús</option>
                <option value="utilitario">Vehículo Utilitario</option>
                <option value="particular">Vehículo Particular</option>
            </select>
        </div>
    </div>

    <!-- Campos de Avión -->
    <div id="campos-avion" style="display: none;">
        <div class="content_itinerario">
            <p>Avión</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="linea_aerea">Línea Aérea:</label>
                    <select name="linea_aerea" placeholder="Seleccionar línea aérea">
                        <!-- Opciones del select -->
                        <option value="">Seleccione el nombre de la linea</option>
                        <option value="AEROMEXICO">AEROMEXICO</option>
                        <option value="AMERICAN AIRLINES">AMERICAN AIRLINES</option>
                        <option value="INTERJET">INTERJET</option>
                        <option value="AIROMAR">AIROMAR</option>
                        <option value="UNITED AIRLINES">UNITED AIRLINES</option>
                        <option value="VIVAEROUBUS">VIVAEROBUS</option>
                        <option value="vOLARIS">VOLARIS</option>
                    </select>
                </div>
                <div class="form-group form-half-50 text_center">
                    <label for="horario_avion">Horario:</label>
                    <input type="time" name="horario_avion" placeholder="Ingresar horario">
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Autobús -->
    <div id="campos-autobus" style="display: none;">
        <div class="content_itinerario">
            <p>Autobús</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="linea_autobus">Línea:</label>
                    <select name="linea_autobus" placeholder="Seleccionar línea">
                        <!-- Opciones del select -->
                        <option value="">Seleccione el nombre de la linea</option>
                        <option value="ETN">ETN</option>
                        <option value="OMNIBUS DE MEXICO">OMNIBUS DE MEXICO</option>
                        <option value="PRIMERA PLUS">PRIMERA PLUS</option>
                        <option value="FUTURA">FUTURA</option>
                        <option value="CHIHUAHUENSES">CHIHUAHUENSES</option>
                        <option value="ELITE">ELITE</option>
                        <option value="TURISTAR LUJO">TURISTAR LUJO</option>
                        <option value="ODM">ODM</option>
                        <option value="PACIFICO">PACIFICO</option>
                        <option value="AUS">AUS</option>
                        <option value="DIRECTOS">DIRECTOS</option>
                        <option value="GUASAVE">GUASAVE</option>
                        <option value="OTROS">OTROS</option>
                    </select>
                </div>
                <div class="form-group form-half-50 text_center">
                    <label for="horario_autobus">Horario:</label>
                    <input type="time" name="horario_autobus" placeholder="Ingresar horario">
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Vehículo Utilitario -->
    <div id="campos-utilitario" style="display: none;">
        <div class="content_itinerario">
            <p class="text_itinerario">Vehículo Utilitario</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="placa_vahiculo_utilitario">Número de placas:</label>
                    <select name="placa_vahiculo_utilitario" placeholder="Ingresar la placa">
                        <!-- Opciones del select -->
                        <option value="">Seleccione las placas del vehiculo</option>
                        <option value="VPK7290">VPK7290</option>
                        <option value="4RJB59">4RJB59</option>
                        <option value="VPH766670">VPH766670</option>
                        <option value="4RJB35">4RJB35</option>
                        <option value="OTROS">OTROS</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Vehículo Particular -->
    <div id="campos-particular" style="display: none;">
        <div class="content_itinerario">
            <p>Vehículo Particular</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="placa_vahiculo_particular">Número de placas:</label>
                    <input type="text" name="placa_vahiculo_particular" placeholder="Ingresar número de placas">
                </div>
            </div>
        </div>
    </div>
</div>

      <!-- Séptimo bloque -->
<div class="form-group-viaticos">
    <h2 class="content_text">Gastos autorizados:</h2>
    <div class="form-flex form-group">
        <!-- Campo de hospedaje -->
        <div class="form-group form-half-25 text_center">
            <label id="label-hospedaje" for="hospedaje">Hospedaje:</label>
            <input type="text" id="hospedaje" name="gasto_hospedaje" placeholder="Ingresar gasto de hospedaje">
        </div>

        <!-- Campo de alimentación -->
        <div class="form-group form-half-25 text_center">
            <label id="label-alimentacion" for="alimentacion">Alimentación:</label>
            <input type="text" id="alimentacion" name="gasto_alimentacion" placeholder="Ingresar gasto de alimentación">
        </div>

        <!-- Campo de vehículo -->
        <div class="form-group form-half-25 text_center">
            <label id="label-vehiculo" for="vehiculo">Vehículo:</label>
            <input type="text" id="vehiculo" name="gasto_vehiculo" placeholder="Ingresar gasto de vehículo">
        </div>

        <!-- Campo de transporte -->
        <div class="form-group form-half-25 text_center">
            <label id="label-transporte" for="transporte">Transporte:</label>
            <input type="text" id="transporte" name="gasto_transporte" placeholder="Ingresar gasto de transporte">
        </div>
    </div>

    <div class="form-flex form-group">
        <!-- Campo de caseta -->
        <div class="form-group form-half-25 text_center">
            <label id="label-caseta" for="caseta">Caseta:</label>
            <input type="text" id="caseta" name="gasto_caseta" placeholder="Ingresar gasto de caseta">
        </div>

        <!-- Campo de gasolina -->
        <div class="form-group form-half-25 text_center">
            <label id="label-gasolina" for="gasolina">Gasolina:</label>
            <input type="text" id="gasolina" name="gasto_gasolina" placeholder="Ingresar gasto de gasolina">
        </div>

        <!-- Campo de taxi -->
        <div class="form-group form-half-25 text_center">
            <label id="label-taxi" for="taxi">Taxi:</label>
            <input type="text" id="taxi" name="gasto_taxi" placeholder="Ingresar gasto de taxi">
        </div>

        <!-- Campo de total -->
        <div class="form-group form-half-25 text_center">
            <label id="label-total" for="total">Total:</label>
            <input type="text" id="total" readonly name="gasto_total" placeholder="Ingresar gasto total">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener los elementos de input
            var inputs = [
                'hospedaje', 'alimentacion', 'vehiculo', 'transporte',
                'caseta', 'gasolina', 'taxi', 'total'
            ];

            // Agregar eventos oninput para filtrar la entrada del usuario y calcular la suma
            for (var i = 0; i < inputs.length; i++) {
                var inputElement = document.getElementById(inputs[i]);

                inputElement.addEventListener('input', function() {
                    // Filtrar la entrada para permitir solo números
                    this.value = this.value.replace(/[^0-9]/g, '');

                    // Calcular la suma de todos los valores
                    var sumaTotal = 0;
                    for (var j = 0; j < inputs.length - 1; j++) {
                        sumaTotal += parseInt(document.getElementById(inputs[j]).value) || 0;
                    }

                    // Mostrar el resultado en el input total
                    document.getElementById('total').value = sumaTotal;
                });
            }
        });
    </script>

    <div class="form-flex form-group">
        <!-- Campo de origen del recurso -->
        <div class="form-group form-half-25 text_center">
            <label for="origen_recurso">Origen del recurso:</label>
            <select name="origen_recurso" placeholder="Seleccionar el tipo de recurso para el viaje">
                <!-- Opciones del select -->
                <option value="">Seleccione una opción</option>
                <option value="ESTATAL">ESTATAL</option>
                <option value="Proyecto Floracion del mango">Proyecto Floracion del mango</option>
                <option value="INGRESOS PROPIOS">INGRESOS PROPIOS</option>
                <option value="OTROS">OTROS</option>
            </select>
        </div>
    </div>
</div>



    <!-- Parte final -->
    <div class="btn_guardar_form">
      <button class="boton-guardar">Guardar</button>
    </div>
  </form>

    <div class="fooder_form">
      <div class="txt_title_fooder">
        <p>Me comprometo a cumplir con los requerimientos para el trámite de esta solicitud, anexando el oficio correspondiente a la comisión,  presentar todos los comprobantes por los gastos efectuados dentro de los límites marcados por la Universidad Tecnológica  Escuinapa en un periodo no mayor a 10 días naturales después del regreso de mi viaje, así como el comprobante del deposito o efectivo no comprobado.</p>
      </div>
      <div class="note_fooder">
        <p>NOTA: En caso de no comprobar en los términos de la normatividad, se sancionará de acuerdo a éstas.</p>
      </div>
    </div>
</div>
<?php include("pie.php"); ?>
 