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
    <h2>REVICION DE OFICIO DE COMISION Y SOLICITUD DE VIÁTICOS</h2>
  </div>
  
  <form class="styled-form" action="funciones/insertar_viatico1.php" method="post">
    <!-- Informacion formulario -->
      <div class="form-flex form-group">
        <div class="form-group form-half-25 text_center">
          <label for="area">ÁREA</label>
          <div class="details">
            <p>x</p>
          </div>
        </div>
        <div class="form-group form-half-25 text_center">
          <label for="numero">NO (Uso Exclusivo del Depto).</label>
          <div class="details">
            <p>x</p>
          </div>
        </div>
      </div>


 <!-- Primer bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Información de usuario:</h2>
  
  <!-- Primera columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="nombres">Nombres:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="apellido_paterno">Apellido paterno:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="apellido_materno">Apellido materno:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
  </div>
  
  <!-- Segunda columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="correo">Correo:</label>
        <div class="details">
            <p>x</p>
        </div>    
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="telefono">Teléfono:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="telefono_extra">Extensión:</label>
        <div class="details">
            <p>x</p>
        </div>
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
        <div class="details">
            <p>x</p>
        </div>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="clave">Clabe:</label>
         <div class="details">
            <p>x</p>
        </div>
    </div>
    
    <div class="form-group form-half-25 text_center">
      <label for="departamento">Banco:</label>
        <div class="details">
            <p>x</p>
        </div>
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
         <div class="details">
            <p>x</p>
        </div>
    </div> 
    <div class="form-group form-half-25 text_center">
      <label for="fecha_regreso">Fecha de regreso:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="dias_totales">Dias totales:</label>
        <div class="details">
            <p>x</p>
        </div>    
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="sin_hospedaje">Dias de hospedaje:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="dias_autorizados">Días Autorizados:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="sin_hospedaje_2">Sin Hospedaje:</label>
        <div class="details">
            <p>x</p>
        </div>
    </div>
  </div>

  <!-- Segunda columna del segundo bloque -->
  <div class="form-flex form-group">
    <div class="form-group form-half-100 text_center">
      <label for="objetivo">Objetivo del viaje:</label>
        <div class="details_textarea">
            <p>x</p>
        </div>
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
          <div class="details">
            <p>x</p>
          </div>
    </div>
      <div class="form-group form-half-100 text_center">
        <label for="comitiva">Función:</label>
          <div class="details">
            <p>x</p>
          </div>
      </div>
      
    </div>
  </div>
</div>


<!-- Quinto bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Itinerario:</h2>
  <!-- Primera columna -->
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
            </tr>
          </thead>
          <tbody>
            <!-- Filas del 1 al 6 -->
            <?php for ($i = 1; $i <= 6; $i++) : ?>
              <tr>
                <th><?php echo $i; ?></th>
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>  
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>  
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>   
                <td>
                    <div class="details">
                        <p>x</p>
                    </div>
                </td>                      
               
              </tr>
            <?php endfor; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


   <!-- Sexto bloque -->
<div class="form-group-viaticos">
    <h2 class="content_text">Transporte:</h2>
    <!-- Selección del tipo de transporte -->
    <div class="form-flex form-group">
        <div class="form-group form-half-50 text_center">
        <label for="tipo_transporte">Tipo de Transporte:</label>
          <div class="details">
            <p>x</p>
          </div>
        </div>
    </div>

    <!-- Campos de Avión -->
    <div id="campos-avion" s>
        <div class="content_itinerario">
            <p>Avión</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="linea_aerea">Línea Aérea:</label>
                    <div class="details">
                        <p>x</p>
                    </div>
                </div>
                <div class="form-group form-half-50 text_center">
                    <label for="horario_avion">Horario:</label>
                      <div class="details">
                          <p>x</p>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Autobús -->
    <div id="campos-autobus" >
        <div class="content_itinerario">
            <p>Autobús</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-50 text_center">
                    <label for="linea_autobus">Línea:</label>
                      <div class="details">
                          <p>x</p>
                      </div>
                </div>
                <div class="form-group form-half-50 text_center">
                    <label for="horario_autobus">Horario:</label>
                      <div class="details">
                          <p>x</p>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Vehículo Utilitario -->
    <div id="campos-utilitario" >
        <div class="content_itinerario">
            <p class="text_itinerario">Vehículo Utilitario</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-100 text_center">
                    <label for="placa_vahiculo_utilitario">Número de placas:</label>
                      <div class="details">
                          <p>x</p>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Campos de Vehículo Particular -->
    <div id="campos-particular" >
        <div class="content_itinerario">
            <p>Vehículo Particular</p>
            <div class="form-flex form-group">
                <div class="form-group form-half-100 text_center">
                    <label for="placa_vahiculo_particular">Número de placas:</label>
                      <div class="details">
                          <p>x</p>
                      </div>
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
              <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de alimentación -->
        <div class="form-group form-half-25 text_center">
            <label id="label-alimentacion" for="alimentacion">Alimentación:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de vehículo -->
        <div class="form-group form-half-25 text_center">
            <label id="label-vehiculo" for="vehiculo">Vehículo:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de transporte -->
        <div class="form-group form-half-25 text_center">
            <label id="label-transporte" for="transporte">Transporte:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>
    </div>

    <div class="form-flex form-group">
        <!-- Campo de caseta -->
        <div class="form-group form-half-25 text_center">
            <label id="label-caseta" for="caseta">Caseta:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de gasolina -->
        <div class="form-group form-half-25 text_center">
            <label id="label-gasolina" for="gasolina">Gasolina:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de taxi -->
        <div class="form-group form-half-25 text_center">
            <label id="label-taxi" for="taxi">Taxi:</label>
            <div class="details">
                <p>x</p>
              </div>
        </div>

        <!-- Campo de total -->
        <div class="form-group form-half-25 text_center">
            <label id="label-total" for="total">Total:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>
    </div>

    <div class="form-flex form-group">
        <!-- Campo de origen del recurso -->
        <div class="form-group form-half-25 text_center">
            <label for="origen_recurso">Origen del recurso:</label>
              <div class="details">
                <p>x</p>
              </div>
        </div>
    </div>
</div>



<!-- Ultimo bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Panel de respuesta:</h2>
  <div class="content_btn">
    <div id="accept" class="btn-accept btn-accept-color" onclick="handleButtonClick(this)">
      <p>Aceptar</p>
    </div>
    <div id="devolucion" class="btn-refused btn-correction-color" onclick="handleButtonClick(this)">
      <p>Devolver</p>
    </div>
    <div id="reject" class="btn-correction btn-refused-color" onclick="handleButtonClick(this)">
      <p>Rechazar</p>
    </div>
  </div>

  <div id="comment-section" class="form-flex form-group hidden">
    <div class="form-group form-half-100 text_center">
      <label id="label-comentario" for="hospedaje">Comentario:</label>
      <textarea id="comentario" cols="8" placeholder="Agregue las correciones a realizar" rows="8"></textarea>
    </div>
  </div>

  <div id="result-message" class="hidden"></div>
  </div>

  <script>
  function handleButtonClick(clickedButton) {
    // Obtener todos los botones
    var buttons = document.querySelectorAll('.content_btn div');

    // Remover la clase 'btn-selected' de todos los botones
    buttons.forEach(function(button) {
      button.classList.remove('btn-selected');
    });

    // Agregar la clase 'btn-selected' al botón clickeado
    clickedButton.classList.add('btn-selected');

    // Realizar la acción correspondiente al botón clickeado
    if (clickedButton.id === 'accept') {
      showResult('Aceptado', '#4caf50'); // Verde
      hideCommentSection();
    } else if (clickedButton.id === 'devolucion') {
      showResult('Devuelto', '#2196f3'); // Rojo
      showCommentSection();
    } else if (clickedButton.id === 'reject') {
      showResult('Rechazado', '#f44336'); // Azul
      hideCommentSection();
    }
  }

  function showResult(decision, color) {
    var resultMessage = document.getElementById('result-message');
    resultMessage.innerHTML = `El resultado de este formulario es: ${decision}`;
    resultMessage.style.backgroundColor = color;
    resultMessage.classList.remove('hidden');
  }

  function showCommentSection() {
    document.getElementById('comment-section').classList.remove('hidden');
  }

  function hideCommentSection() {
    var commentSection = document.getElementById('comment-section');
    commentSection.classList.add('hidden');
    document.getElementById('comentario').value = ''; // Limpiar el campo de comentarios al ocultarlo
  }
</script>



    <!-- Parte final -->
    <div class="btn_guardar_form">
      <button class="boton-guardar">Guardar</button>
    </div>
  </form>

</div>
<?php include("pie.php"); ?>
 