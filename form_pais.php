<?php include("encabezado.php"); ?>

<div class="formulario_viaticos">
  <div class="title_form">
    <h2>Registrar pais</h2>
  </div>
  <form class="styled-form" action="funciones/insertar_pais.php" method="post" id="formulario" enctype="multipart/form-data">
    <div class="form-group-viaticos">
      <div class="form-flex form-group">
        <div class="form-group form-half-100 text_center">
          <label for="nombres">Nombre del pais:</label>
          <input required type="text" id="nombres" name="nom_pais" placeholder="Ingresar nuevo pais">
        </div>
      </div>
    </div>
	  <div class="btn_guardar_form">
    	<button class="boton-guardar">Guardar</button>
      </div>
	</form>
</div>

<?php include("pie.php"); ?>
