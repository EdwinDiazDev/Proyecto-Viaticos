<?php
include("Conexion_forms.php"); // Reemplaza con la ruta correcta de tu archivo de conexión

if (isset($_POST["input"])) {
    $input = $_POST["input"];

    $query = "SELECT pk_estado, nom_estado FROM estados WHERE nom_estado LIKE '%$input%' LIMIT 5";
    $result = mysqli_query($conexion, $query);

    while ($fila = mysqli_fetch_array($result)) {
        echo "<div class='estado-item' data-estado-id='" . $fila['pk_estado'] . "'>" . $fila['nom_estado'] . "</div>";
    }
}
?>
