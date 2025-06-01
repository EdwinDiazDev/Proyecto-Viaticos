// Para el bloque de comitivas
document.getElementById("agregar-campos-comitiva").addEventListener("click", function () {
    const container = document.getElementById("campos-comitiva");
    const nuevoCampo = document.createElement("div");
    nuevoCampo.classList.add("form-flex");
    nuevoCampo.innerHTML = `
      <div class="form-group form-half-100 text_center">
        <label for="nombre_comitiva">Nombre:</label>
        <input type="text" name="nombre_comitiva[]">
      </div>
      <div class="form-group form-half-100 text_center">
        <label for="comitiva">Función:</label>
        <select name="funcion_comitiva" placeholder="Seleccionar función">
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
    `;
  
    container.appendChild(nuevoCampo);
  
    // Agregar evento para eliminar fila
    const botonesEliminar = nuevoCampo.querySelectorAll(".eliminar-campos-comitiva");
    botonesEliminar.forEach(function (boton) {
      boton.addEventListener("click", function () {
        nuevoCampo.remove();
      });
    });
  });
  
  // Agregar evento para eliminar fila a las filas existentes
  const botonesEliminar = document.querySelectorAll(".eliminar-campos-comitiva");
  botonesEliminar.forEach(function (boton) {
    boton.addEventListener("click", function () {
      const fila = boton.closest(".form-flex");
      fila.remove();
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    // Para el bloque de Itinerario
    document.querySelector(".agregar-campos-itinerario").addEventListener("click", function () {
      const container = document.getElementById("campos-itinerario");
      const nuevoCampo = document.createElement("div");
      nuevoCampo.classList.add("form-flex", "form-group", "campos-itinerario");
      nuevoCampo.innerHTML = `
      <div class="form-flex form-group">

      <div class="form-group form-half-25 text_center">
        <label for="estado_partida">Estado de partida:</label>
        <select name="estado_partida[]">
          <!-- Opciones del select -->
          <option value="opcion1">Opción 1</option>
          <option value="opcion2">Opción 2</option>
          <option value="opcion3">Opción 3</option>
        </select>
      </div>
      <!-- Ciudad de partida -->
      <div class="form-group form-half-25 text_center">
        <label for="ciudad">Ciudad de partida:</label>
        <input type="text" name="ciudad[]" placeholder="Ingresar ciudad de partida">
      </div>
      <!-- Fecha de partida -->
      <div class="form-group form-half-25 text_center">
        <label for="fecha">Fecha de partida:</label>
        <input type="date" name="fecha[]" placeholder="Ingresar fecha de partida">
      </div>
      <!-- Hora de partida -->
      <div class="form-group form-half-25 text_center">
        <label for="hora">Hora de partida:</label>
        <input type="time" name="hora[]" placeholder="Ingresar hora de partida">
      </div>
    </div>

    <!-- Campos de Viaje de Regreso -->
    <div class="form-flex form-group">
      <!-- Estado de regreso -->
      <div class="form-group form-half-25 text_center">
        <label for="estado_regreso">Estado de regreso:</label>
        <select name="estado_regreso[]">
          <!-- Opciones del select -->
          <option value="opcion1">Opción 1</option>
          <option value="opcion2">Opción 2</option>
          <option value="opcion3">Opción 3</option>
        </select>
      </div>
      <!-- Ciudad de regreso -->
      <div class="form-group form-half-25 text_center">
        <label for="ciudad_regreso">Ciudad de regreso:</label>
        <input type="text" name="ciudad_regreso[]" placeholder="Ingresar ciudad de regreso">
      </div>
      <!-- Fecha de regreso -->
      <div class="form-group form-half-25 text_center">
        <label for="fecha_regreso">Fecha de regreso:</label>
        <input type="date" name="fecha_regreso[]" placeholder="Ingresar fecha de regreso">
      </div>
      <!-- Hora de regreso -->
      <div class="form-group form-half-25 text_center">
        <label for="hora_regreso">Hora de regreso:</label>
        <input type="time" name="hora_regreso[]" placeholder="Ingresar hora de regreso">
      </div>
        <!-- ... tu contenido HTML para un nuevo campo ... -->
        <div class="form-group form-half-15 text_center">
          <button type="button" id="eliminar-campos-itinerario-down" class="eliminar-campos-itinerario">Eliminar</button>
        </div>
      `;
  
      container.appendChild(nuevoCampo);
  
      // Agregar evento para eliminar fila
      nuevoCampo.querySelector(".eliminar-campos-itinerario").addEventListener("click", function () {
        nuevoCampo.remove();
      });
    });
  });
  
  


// Función para mostrar un elemento por su ID
function mostrarElemento(id) {
  var elemento = document.getElementById(id);
  if (elemento) {
    elemento.style.display = "block";
  }
}

// Función para ocultar un elemento por su ID
function ocultarElemento(id) {
  var elemento = document.getElementById(id);
  if (elemento) {
    elemento.style.display = "none";
  }
}

// Función para ocultar varios elementos por su ID
function ocultarElementos(elementos) {
  for (var i = 0; i < elementos.length; i++) {
    ocultarElemento(elementos[i]);
  }
}

// Función para mostrar el nombre del vehuculo que se seleccione de acuerdo al tipo de transporte seleccionado
function mostrarCamposTransporte() {

  var tipoTransporte = document.getElementById("tipo_transporte").value;
  var labelVehiculo = document.getElementById("label-vehiculo");

  // Cambia dinámicamente el nombre del label del campo de vehículo según la opción seleccionada
  if (tipoTransporte === "avion") {
    labelVehiculo.textContent = "Avión:";

  } else if (tipoTransporte === "autobus") {
    labelVehiculo.textContent = "Autobús:";

  } else if (tipoTransporte === "utilitario") {
    labelVehiculo.textContent = "Veh. Utilitario:";

  } else if (tipoTransporte === "particular") {
    labelVehiculo.textContent = "Veh. privado:";
  } else {
    labelVehiculo.textContent = "Vehiculo";
  }


  // Elementos específicos de avión que quieres ocultar al cambiar de opinión

  var elementosAvion = ["caseta", "label-caseta", "gasolina", "label-gasolina"];
  var elementosAutobus = ["caseta", "label-caseta", "gasolina", "label-gasolina"];
  var elementosUtilitario = ["taxi", "label-taxi"];
  var elementosParticular = ["taxi", "label-taxi"];

  var restantes = ["hospedaje", "label-hospedaje", "alimentacion", "label-alimentacion", "vehiculo", "label-vehiculo", "transporte", "label-transporte", "total", "label-total"];


  // Obtener el tipo de transporte seleccionado
  var tipoTransporte = document.getElementById("tipo_transporte").value;

  // Ocultar todos los campos y labels primero
  ocultarElemento("campos-avion");
  ocultarElemento("label-campos-avion");
  ocultarElemento("campos-autobus");
  ocultarElemento("label-campos-autobus");
  ocultarElemento("campos-utilitario");
  ocultarElemento("label-campos-utilitario");
  ocultarElemento("campos-particular");
  ocultarElemento("label-campos-particular");

  // Restablecer elementos específicos de avión ocultos
  for (var i = 0; i < elementosAvion.length; i++) {
    mostrarElemento(elementosAvion[i]);
  }

  // Restablecer elementos específicos de autobus ocultos
  for (var i = 0; i < elementosAutobus.length; i++) {
    mostrarElemento(elementosAutobus[i]);
  }

   // Restablecer elementos específicos de Vehiculo utilitario ocultos
   for (var i = 0; i < elementosUtilitario.length; i++) {
    mostrarElemento(elementosUtilitario[i]);
  }

   // Restablecer elementos específicos de Vehiculo particular ocultos
   for (var i = 0; i < elementosParticular.length; i++) {
    mostrarElemento(elementosParticular[i]);
  }

   // Restablecer elementos específicos de Vehiculo particular ocultos
   for (var i = 0; i < restantes.length; i++) {
    mostrarElemento(restantes[i]);
  }

  // Mostrar los campos y labels correspondientes al tipo de transporte seleccionado
  if (tipoTransporte === "avion") {
    mostrarElemento("campos-avion");
    mostrarElemento("label-campos-avion");
    // Ocultar campos y labels específicos de otros tipos de transporte
    ocultarElementos(elementosAvion);
  } else if (tipoTransporte === "autobus") {
    mostrarElemento("campos-autobus");
    mostrarElemento("label-campos-autobus");
    // Ocultar campos y labels específicos de otros tipos de transporte
    ocultarElementos(elementosAutobus);
  } else if (tipoTransporte === "utilitario") {
    mostrarElemento("campos-utilitario");
    mostrarElemento("label-campos-utilitario");
    // Ocultar campos y labels específicos de otros tipos de transporte
    ocultarElementos(elementosUtilitario);
  } else if (tipoTransporte === "particular") {
    mostrarElemento("campos-particular");
    mostrarElemento("label-campos-particular");
    // Ocultar campos y labels específicos de otros tipos de transporte
    ocultarElementos(elementosParticular);
  }
}

// Llama a la función mostrarCamposTransporte al cargar la página
document.addEventListener("DOMContentLoaded", function () {
  mostrarCamposTransporte();
});


// Resto del código JavaScript para filtrar la entrada del usuario y calcular la suma
document.addEventListener("DOMContentLoaded", function () {
  // Obtener los elementos de input
  var inputHospedaje = document.getElementById('hospedaje');
  var inputAlimentacion = document.getElementById('alimentacion');
  var inputAvion = document.getElementById('avion');
  var inputTransporte = document.getElementById('transporte');
  var inputCaseta = document.getElementById('caseta');
  var inputGasolina = document.getElementById('gasolina');
  var inputTaxi = document.getElementById('taxi');
  var inputTotal = document.getElementById('total');

  // Agregar eventos oninput para filtrar la entrada del usuario y calcular la suma
  var inputs = [inputHospedaje, inputAlimentacion, inputAvion, inputTransporte, inputCaseta, inputGasolina, inputTaxi];

  for (var i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('input', function () {
          // Filtrar la entrada para permitir solo números
          this.value = this.value.replace(/[^0-9]/g, '');

          // Calcular la suma de todos los valores
          var sumaTotal = 0;
          for (var j = 0; j < inputs.length; j++) {
              sumaTotal += parseInt(inputs[j].value) || 0;
          }

          // Mostrar el resultado en el input total
          inputTotal.value = sumaTotal;
      });
  }

  // Llama a la función mostrarCamposTransporte al cargar la página
  mostrarCamposTransporte();
});

// Función para mostrar un elemento por su ID
function mostrarElemento(id) {
  var elemento = document.getElementById(id);
  if (elemento) {
      elemento.style.display = "block";
  }
}

// Función para ocultar un elemento por su ID
function ocultarElemento(id) {
  var elemento = document.getElementById(id);
  if (elemento) {
      elemento.style.display = "none";
  }
}

  
  
  // VALIDACIONES

  // FUNCION PARA SACAR LOS DIAS TOTALES DE LA FECHA DE INICIO Y FINAL
var fechaPartidaAnterior = "";
var fechaRegresoAnterior = "";

// Función para calcular los días totales y validar fechas
function calcularDias() {
  var fechaPartida = new Date(document.getElementById('fecha_partida').value);
  var fechaRegreso = new Date(document.getElementById('fecha_regreso').value);
  var fechaHoy = new Date();  // Obtener la fecha actual

  // Validar si la fecha de regreso es posterior o igual a la fecha de partida
  if (fechaRegreso < fechaPartida) {
    alert('La fecha de regreso debe ser posterior o igual a la fecha de partida.');
    // Revertir la fecha de regreso al valor anterior
    document.getElementById('fecha_regreso').value = fechaRegresoAnterior;
    return;
  }

  // Validar si las fechas son posteriores a la fecha actual
  if (fechaPartida < fechaHoy || fechaRegreso < fechaHoy) {
    alert('Por favor, ingrese fechas futuras.');
    // Revertir ambas fechas al valor anterior
    document.getElementById('fecha_partida').value = fechaPartidaAnterior;
    document.getElementById('fecha_regreso').value = fechaRegresoAnterior;
    return;
  }

  // Validar si las fechas de partida y regreso son distintas
  if (fechaPartida.getTime() === fechaRegreso.getTime()) {
    alert('Las fechas de partida y regreso no pueden ser iguales.');
    // Revertir ambas fechas al valor anterior
    document.getElementById('fecha_partida').value = fechaPartidaAnterior;
    document.getElementById('fecha_regreso').value = fechaRegresoAnterior;
    return;
  }

  // Calcular la diferencia en milisegundos
  var diferencia = fechaRegreso - fechaPartida;

  // Convertir la diferencia a días, sumando 1 para incluir el día de inicio
  var diasTotales = Math.floor(diferencia / (1000 * 60 * 60 * 24)) + 1;

  // Verificar si los valores son numéricos antes de asignar
  if (!isNaN(diasTotales) && diasTotales >= 0) {
    // Mostrar el resultado en el campo de días totales
    document.getElementById('dias_totales').value = diasTotales;
  } else {
    // Si no es un número válido, puedes mostrar un mensaje o dejar el campo vacío
    document.getElementById('dias_totales').value = '';
  }

  // Actualizar las fechas anteriores después de una validación exitosa
  fechaPartidaAnterior = document.getElementById('fecha_partida').value;
  fechaRegresoAnterior = document.getElementById('fecha_regreso').value;
}

// Función para validar si una fecha es válida
function isValidDate(date) {
  return date instanceof Date && !isNaN(date.getTime());
}

// Agrega event listeners para llamar a la función cuando cambien las fechas
document.getElementById('fecha_partida').addEventListener('change', calcularDias);
document.getElementById('fecha_regreso').addEventListener('change', calcularDias);
