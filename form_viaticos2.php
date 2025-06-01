<?php include("encabezado.php"); ?>

<div class="header_form">
  <div class="title_header_form">
    <h1>UNIVERSIDAD TECNOLÓGICA DE ESCUINAPA</h1>
  </div>
  <div class="sub_title_header_form">
    <p>SUBDIRECCION DE ADMINISTRACIÓN Y FINANZAS</p>
    <p>RECURSOS HUMANOS</p>
  </div>
</div>

<div class="formulario_viaticos">
  <div class="title_form">
    <h2>REPORTE DE GASTOS DE VIAJE</h2>
  </div>

  <form class="styled-form" action="funciones/insertar_formulario2.php" method="post">
   <!-- Primer bloque -->
<div class="form-group-viaticos">
  <h2 class="content_text">Información Personal y Laboral:</h2>
  <!-- Primera columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-50 text_center">
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="apellido_paterno">Apellido paterno:</label>
      <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Ingresar apellido paterno">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="apellido_materno">Apellido materno:</label>
      <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Ingresar apellido materno">
    </div>
    <div class="form-group form-half-50 text_center">
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" placeholder="Ingresar dirección">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="departamento">Departamento:</label>
      <input type="text" id="departamento" name="departamento" placeholder="Ingresar departamento de trabajo">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="puesto">Puesto:</label>
      <input type="text" id="puesto" name="puesto" placeholder="Ingresar puesto de trabajo">
    </div>
  </div>

  <!-- Segunda columna -->
  <div class="form-flex form-group">
    <div class="form-group form-half-75 text_center">
      <label for="itinerario">Itinerario:</label>
      <input type="text" id="itinerario" name="itinerario" placeholder="Ingresar itinerario Ej: ESCUINAPA-MAZATLAN-ESCUINAPA">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="origen_viaje">Oficio origen del Viaje:</label>
      <input type="text" id="origen_viaje" name="origen_viaje" placeholder="Ingresar número de origen del viaje">
    </div>
    <div class="form-group form-half-25 text_center">
      <label for="medioTransporte">Medio de transporte:</label>
      <select id="medioTransporte" name="medioTransporte" onchange="mostrarCamposAdicionales()">
        <option value="terrestre">Terrestre</option>
        <option value="aereo">Aéreo</option>
      </select>
    </div>
    <div id="terrestreFields" class="form-group form-half-25 text_center">
      <label for="placaAuto">Placa Auto:</label>
      <input type="text" id="placaAuto" name="placaAuto" placeholder="Ingresar placa del auto">
    </div>
    <div id="aereoFields" class="form-group form-half-25 text_center" style="display: none;">
      <label for="aerolinea">Aerolínea:</label>
      <input type="text" id="aerolinea" name="aerolinea" placeholder="Ingresar aerolínea">
    </div>
  </div>
  <!-- Cuarta columna -->
  <div class="form-flex form-group">
   
  </div>

  <div class="form-flex form-group">
    <div class="form-group form-half-100 text_center">
      <label for="motivo">Motivo Detallado del viaje:</label>
      <textarea id="motivo" name="motivo" cols="8" placeholder="Ej: Entrega de transferencia electrónica por donación a Teleton 2022 de trabajadores de la Utesc" rows="8"></textarea>
    </div>
  </div>
</div>

    <!-- Fin del primer bloque -->

   <!-- Segundo bloque -->
   <div class="form-group-viaticos">
      <h2 class="content_text">Información Detallada del Viaje:</h2>
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
                        <th>Fecha:</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th>14/02/2023</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>No. cuenta:</th>
                        <th></th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sábado</th>
                        <th>Precio:</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas del 1 al 20 -->
                    <tr>
                      <th>1</th>
                      <th>Habitación</td>
                      <td><input type="number" name="fecha1"></td>
                      <td><input type="number" name="col1"></td>
                      <td><input type="number" name="lunes1"></td>
                      <td><input type="number" name="martes1"></td>
                      <td><input type="number" name="miercoles1"></td>
                      <td><input type="number" name="jueves1"></td>
                      <td><input type="number" name="viernes1"></td>
                      <td><input type="number" name="sabado1"></td>
                      <td><input type="number" name="precio1"></td>
                    </tr>
                
                    <tr>
                      <th>2</th>
                      <th>Teléfono hotel autorizado</th>
                      <td><input type="number" name="fecha2"></td>
                      <td><input type="number" name="col2"></td>
                      <td><input type="number" name="lunes2"></td>
                      <td><input type="number" name="martes2"></td>
                      <td><input type="number" name="miercoles2"></td>
                      <td><input type="number" name="jueves2"></td>
                      <td><input type="number" name="viernes2"></td>
                      <td><input type="number" name="sabado2"></td>
                      <td><input type="number" name="precio2"></td>
                    </tr>
                
                    <tr>
                      <th>3</th>
                      <th>Otros servicios de hotel</th>
                      <td><input type="number" name="fecha3"></td>
                      <td><input type="number" name="col3"></td>
                      <td><input type="number" name="lunes3"></td>
                      <td><input type="number" name="martes3"></td>
                      <td><input type="number" name="miercoles3"></td>
                      <td><input type="number" name="jueves3"></td>
                      <td><input type="number" name="viernes3"></td>
                      <td><input type="number" name="sabado3"></td>
                      <td><input type="number" name="precio3"></td>
                    </tr>
                
                    <tr>
                      <th>4</th>
                      <th>Desayuno</th>
                      <td><input type="number" name="fecha4"></td>
                      <td><input type="number" name="col4"></td>
                      <td><input type="number" name="lunes4"></td>
                      <td><input type="number" name="martes4"></td>
                      <td><input type="number" name="miercoles4"></td>
                      <td><input type="number" name="jueves4"></td>
                      <td><input type="number" name="viernes4"></td>
                      <td><input type="number" name="sabado4"></td>
                      <td><input type="number" name="precio4"></td>
                    </tr>
                
                    <tr>
                      <th>5</th>
                      <th>Comida</th>
                      <td><input type="number" name="fecha5"></td>
                      <td><input type="number" name="col5"></td>
                      <td><input type="number" name="lunes5"></td>
                      <td><input type="number" name="martes5"></td>
                      <td><input type="number" name="miercoles5"></td>
                      <td><input type="number" name="jueves5"></td>
                      <td><input type="number" name="viernes5"></td>
                      <td><input type="number" name="sabado5"></td>
                      <td><input type="number" name="precio5"></td>
                    </tr>
                
                    <tr>
                      <th>6</th>
                      <th>Cena</th>
                      <td><input type="number" name="fecha6"></td>
                      <td><input type="number" name="col6"></td></td>
                      <td><input type="number" name="lunes6"></td>
                      <td><input type="number" name="martes6"></td>
                      <td><input type="number" name="miercoles6"></td>
                      <td><input type="number" name="jueves6"></td>
                      <td><input type="number" name="viernes6"></td>
                      <td><input type="number" name="sabado6"></td>
                      <td><input type="number" name="precio6"></td>
                    </tr>
                
                    <tr>
                      <th>7</th>
                      <th>Atención a terceros</th>
                      <td><input type="number" name="fecha7"></td>
                      <td><input type="number" name="col7"></td>
                      <td><input type="number" name="lunes7"></td>
                      <td><input type="number" name="martes7"></td>
                      <td><input type="number" name="miercoles7"></td>
                      <td><input type="number" name="jueves7"></td>
                      <td><input type="number" name="viernes7"></td>
                      <td><input type="number" name="sabado7"></td>
                      <td><input type="number" name="precio7"></td>
                    </tr>
                
                    <tr>
                      <th>8</th>
                      <th>Boleto de avión</th>
                      <td><input type="number" name="fecha8"></td>
                      <td><input type="number" name="col8"></td>
                      <td><input type="number" name="lunes8"></td>
                      <td><input type="number" name="martes8"></td>
                      <td><input type="number" name="miercoles8"></td>
                      <td><input type="number" name="jueves8"></td>
                      <td><input type="number" name="viernes8"></td>
                      <td><input type="number" name="sabado8"></td>
                      <td><input type="number" name="precio8"></td>
                    </tr>
                
                    <tr>
                      <th>9</th>
                      <th>Transportación terrestre</th>
                      <td><input type="number" name="fecha9"></td>
                      <td><input type="number" name="col9"></td>
                      <td><input type="number" name="lunes9"></td>
                      <td><input type="number" name="martes9"></td>
                      <td><input type="number" name="miercoles9"></td>
                      <td><input type="number" name="jueves9"></td>
                      <td><input type="number" name="viernes9"></td>
                      <td><input type="number" name="sabado9"></td>
                      <td><input type="number" name="precio9"></td>
                    </tr>
                
                    <tr>
                      <th>10</th>
                      <th>Renta de automóvil</th>
                      <td><input type="number" name="fecha10"></td>
                      <td><input type="number" name="col10"></td>
                      <td><input type="number" name="lunes10"></td>
                      <td><input type="number" name="martes10"></td>
                      <td><input type="number" name="miercoles10"></td>
                      <td><input type="number" name="jueves10"></td>
                      <td><input type="number" name="viernes10"></td>
                      <td><input type="number" name="sabado10"></td>
                      <td><input type="number" name="precio10"></td>
                    </tr>
                
                    <tr>
                      <th>11</th>
                      <th>Gasolina de auto particular</th>
                      <td><input type="number" name="fecha11"></td>
                      <td><input type="number" name="col11"></td>
                      <td><input type="number" name="lunes11"></td>
                      <td><input type="number" name="martes11"></td>
                      <td><input type="number" name="miercoles11"></td>
                      <td><input type="number" name="jueves11"></td>
                      <td><input type="number" name="viernes11"></td>
                      <td><input type="number" name="sabado11"></td>
                      <td><input type="number" name="precio11"></td>
                    </tr>
                
                    <tr>
                      <th>12</th>
                      <th>Gasolina de auto UT</th>
                      <td><input type="number" name="fecha12"></td>
                      <td><input type="number" name="col12"></td>
                      <td><input type="number" name="lunes12"></td>
                      <td><input type="number" name="martes12"></td>
                      <td><input type="number" name="miercoles12"></td>
                      <td><input type="number" name="jueves12"></td>
                      <td><input type="number" name="viernes12"></td>
                      <td><input type="number" name="sabado12"></td>
                      <td><input type="number" name="precio12"></td>
                    </tr>
                
                    <tr>
                      <th>13</th>
                      <th>Mantenimiento auto UT</th>
                      <td><input type="number" name="fecha13"></td>
                      <td><input type="number" name="col13"></td>
                      <td><input type="number" name="lunes13"></td>
                      <td><input type="number" name="martes13"></td>
                      <td><input type="number" name="miercoles13"></td>
                      <td><input type="number" name="jueves13"></td>
                      <td><input type="number" name="viernes13"></td>
                      <td><input type="number" name="sabado13"></td>
                      <td><input type="number" name="precio13"></td>
                    </tr>
                
                    <tr>
                      <th>14</th>
                      <th>Taxi/uber</th>
                      <td><input type="number" name="fecha14"></td>
                      <td><input type="number" name="col14"></td>
                      <td><input type="number" name="lunes14"></td>
                      <td><input type="number" name="martes14"></td>
                      <td><input type="number" name="miercoles14"></td>
                      <td><input type="number" name="jueves14"></td>
                      <td><input type="number" name="viernes14"></td>
                      <td><input type="number" name="sabado14"></td>
                      <td><input type="number" name="precio14"></td>
                    </tr>
                
                    <tr>
                      <th>15</th>
                      <th>Kilometraje auto propio</th>
                      <td><input type="number" name="fecha15"></td>
                      <td><input type="number" name="col15"></td>
                      <td><input type="number" name="lunes15"></td>
                      <td><input type="number" name="martes15"></td>
                      <td><input type="number" name="miercoles15"></td>
                      <td><input type="number" name="jueves15"></td>
                      <td><input type="number" name="viernes15"></td>
                      <td><input type="number" name="sabado15"></td>
                      <td><input type="number" name="precio15"></td>
                    </tr>
                
                    <tr>
                      <th>16</th>
                      <th>Estacionamientos</th>
                      <td><input type="number" name="fecha16"></td>
                      <td><input type="number" name="col16"></td>
                      <td><input type="number" name="lunes16"></td>
                      <td><input type="number" name="martes16"></td>
                      <td><input type="number" name="miercoles16"></td>
                      <td><input type="number" name="jueves16"></td>
                      <td><input type="number" name="viernes16"></td>
                      <td><input type="number" name="sabado16"></td>
                      <td><input type="number" name="precio16"></td>
                    </tr>
                
                    <tr>
                      <th>17</th>
                      <th>Casetas de cobro</th>
                      <td><input type="number" name="fecha17"></td>
                      <td><input type="number" name="col17"></td>
                      <td><input type="number" name="lunes17"></td>
                      <td><input type="number" name="martes17"></td>
                      <td><input type="number" name="miercoles17"></td>
                      <td><input type="number" name="jueves17"></td>
                      <td><input type="number" name="viernes17"></td>
                      <td><input type="number" name="sabado17"></td>
                      <td><input type="number" name="precio17"></td>
                    </tr>
                
                    <tr>
                      <th>18</th>
                      <th>Teléfono en caseta</th>
                      <td><input type="number" name="fecha18"></td>
                      <td><input type="number" name="col18"></td>
                      <td><input type="number" name="lunes18"></td>
                      <td><input type="number" name="martes18"></td>
                      <td><input type="number" name="miercoles18"></td>
                      <td><input type="number" name="jueves18"></td>
                      <td><input type="number" name="viernes18"></td>
                      <td><input type="number" name="sabado18"></td>
                      <td><input type="number" name="precio18"></td>
                    </tr>
                
                    <tr>
                      <th>19</th>
                      <th>Papelería</th>
                      <td><input type="number" name="fecha19"></td>
                      <td><input type="number" name="col19"></td>
                      <td><input type="number" name="lunes19"></td>
                      <td><input type="number" name="martes19"></td>
                      <td><input type="number" name="miercoles19"></td>
                      <td><input type="number" name="jueves19"></td>
                      <td><input type="number" name="viernes19"></td>
                      <td><input type="number" name="sabado19"></td>
                      <td><input type="number" name="precio19"></td>
                    </tr>
                
                    <tr>
                      <th>20</th>
                      <th>Misceláneos</th>
                      <td><input type="number" name="fecha20"></td>
                      <td><input type="number" name="col20"></td>
                      <td><input type="number" name="lunes20"></td>
                      <td><input type="number" name="martes20"></td>
                      <td><input type="number" name="miercoles20"></td>
                      <td><input type="number" name="jueves20"></td>
                      <td><input type="number" name="viernes20"></td>
                      <td><input type="number" name="sabado20"></td>
                      <td><input type="number" name="precio20"></td>
                    </tr>

                    <tr>
                      <th></th>
                      <th id="total_gastos_dia">TOTAL DE GASTOS POR DIA</th>
                      <td><input type="number" id="fecha_total" name="fecha_total"></td>
                      <td><input type="number" id="col_total" name="col_total"></td>
                      <td><input type="number" id="lunes_total" name="lunes_total"></td>
                      <td><input type="number" id="martes_total" name="martes_total"></td>
                      <td><input type="number" id="miercoles_total" name="miercoles_total"></td>
                      <td><input type="number" id="jueves_total" name="jueves_total"></td>
                      <td><input type="number" id="viernes_total" name="viernes_total"></td>
                      <td><input type="number" id="sabado_total" name="sabado_total"></td>
                      <td><input type="number" id="precio_total" name="precio_total"></td>
                    </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>

    <!-- Tercer cuadro -->
    <div class="form-group-viaticos">
      <h2 class="content_text">Resultados de gastos:</h2>
      <!-- Primera columna -->
      <div class="form-flex form-group">
        <div class="form-group form-half-25 text_center">
          <label for="nombres">Anticipo:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>

        <div class="form-group form-half-25 text_center">
          <label for="nombres">Voleto de avion:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>

        <div class="form-group form-half-50 text_center">
          <label for="nombres">Total de anticipos:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>
      </div>

      <!-- Segunda columna -->
      <div class="form-flex form-group">
        <div class="form-group form-half-25 text_center">
          <label for="nombres">Total de anticipos:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>

        <div class="form-group form-half-25 text_center">
          <label for="nombres">Total de gastos:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>

        <div class="form-group form-half-50 text_center">
          <label for="nombres">SALDO:</label>
          <input type="text" id="nombres" name="nombres" placeholder="Ingresar nombres">
        </div>
      </div>
      <!-- Tercera columna -->
      <div class="form-flex form-group">
        <div class="form-group form-half-100 text_center">
          <label for="objetivo">Resultado del viaje realizado :</label>
          <textarea name="" id="" cols="8" placeholder="" rows="8"></textarea>
        </div>
      </div>
    </div>

    <!-- Parte final -->
    <div class="btn_guardar_form">
      <button class="boton-guardar">Guardar</button>
    </div>
  </form>
</div>
<?php include("pie.php"); ?>

