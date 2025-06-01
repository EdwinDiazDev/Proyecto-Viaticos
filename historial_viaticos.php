<?php include("encabezado.php"); ?>

<div class="container_table">
    <h1 class="title_table">Historial de Viáticos del Usuario</h1>
    <table>
        <thead>
            <tr>
                <th>Objetivo</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes generar dinámicamente filas para cada viático del usuario -->
            <tr>
                <td>Reunión de negocios</td>
                <td>12-12-2023</td>
                <td>Aprobado</td>
                <td><button class="view-details-button" onclick="verDetalles(1)">Ver Detalles</button></td>
            </tr>
            <tr>
                <td>Conferencia de desarrollo personal</td>
                <td>01-12-2023</td>
                <td>Cancelado</td>
                <td><button class="view-details-button" onclick="verDetalles(2)">Ver Detalles</button></td>
            </tr>
            <!-- Repite esta estructura para cada viático del usuario -->
        </tbody>
    </table>
</div>

<!-- Pie de página (si tienes uno) -->

<script>
    // Puedes utilizar esta función para redirigir al usuario al detalle del viático
    function verDetalles(viaticoId) {
        // Puedes redirigir a una página específica para ver detalles pasando el ID del viático
        window.location.href = "ver_detalles_viatico.php?id=" + viaticoId;
    }
</script>

<?php include("pie.php"); ?>
