<?php include("encabezado.php");?>

<div class="container">
    <h1 class="title_table">Recientes</h1>

    <div class="card-container">
        <!-- Tarjeta 1 -->
        <div class="card">
            <div class="img_card">
                <img src="assets/img/logo.png" alt="Imagen Formulario 1">
            </div>
            <h3>Formulario 1</h3>
            <p><span class="keyword">Objetivo:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><span class="keyword">Fecha:</span> 12-04-2023</p>
            <p><span class="keyword">Estado:</span> Pendiente</p>
            <button class="view-details-button" onclick="verDetalles(1)">Ver Detalles</button>
        </div>

        <!-- Tarjeta 2 -->
        <div class="card">
            <div class="img_card">
                <img src="assets/img/logo.png" alt="Imagen Formulario 2">
            </div>
            <h3>Formulario 2</h3>
            <p><span class="keyword">Objetivo:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><span class="keyword">Fecha:</span> 01-12-2023</p>
            <p><span class="keyword">Estado:</span> Cancelado</p>
            <button class="view-details-button" onclick="verDetalles(2)">Ver Detalles</button>
        </div>

        <!-- Tarjeta 3 -->
        <div class="card">
            <div class="img_card">
                <img src="assets/img/logo.png" alt="Imagen Formulario 3">
            </div>
            <h3>Formulario 3</h3>
            <p><span class="keyword">Objetivo:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><span class="keyword">Fecha:</span> 15-05-2023</p>
            <p><span class="keyword">Estado:</span> Aprobado</p>
            <button class="view-details-button" onclick="verDetalles(3)">Ver Detalles</button>
        </div>

        <!-- Tarjeta 4 -->
        <div class="card">
            <div class="img_card">
                <img src="assets/img/logo.png" alt="Imagen Formulario 4">
            </div>
            <h3>Formulario 4</h3>
            <p><span class="keyword">Objetivo:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><span class="keyword">Fecha:</span> 20-06-2023</p>
            <p><span class="keyword">Estado:</span> Cancelado</p>
            <button class="view-details-button" onclick="verDetalles(4)">Ver Detalles</button>
        </div>
    </div>
</div>

<!-- Pie de página (si tienes uno) -->
<script>
    // Puedes utilizar esta función para redirigir al usuario al detalle del formulario
    function verDetalles(formularioId) {
    // Puedes redirigir a una página específica para ver detalles pasando el ID del formulario
    window.location.href = "ver_detalles.php?id=" + formularioId;
    }
</script>

<?php include("pie.php");?>
