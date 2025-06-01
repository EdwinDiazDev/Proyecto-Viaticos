<?php include("encabezado.php"); ?>

<div class="container_table">
    <h1 class="title_table">Lista de Profesores</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí puedes generar dinámicamente filas para cada profesor -->
            <tr>
                <td>Juan Pérez</td>
                <td>123-456-7890</td>
                <td>juan@example.com</td>
                <td>Masculino</td>
                <td class="style_btn">
                    <button class="edit-button" onclick="editarProfesor(1)">Editar</button>
                    <button class="delete-button" onclick="eliminarProfesor(1)">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function editarProfesor(profesorId) {
        console.log("Editar profesor con ID: " + profesorId);
        // Aquí puedes agregar lógica para editar al profesor
    }

    function eliminarProfesor(profesorId) {
        console.log("Eliminar profesor con ID: " + profesorId);
        // Aquí puedes agregar lógica para eliminar al profesor
    }
</script>

<?php include("pie.php"); ?>
