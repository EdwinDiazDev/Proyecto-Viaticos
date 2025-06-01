<?php
// Tu código de conexión a la base de datos aquí
class Conexion {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "proyecto_viaticos";
    public $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}
// Obtener el nombre del banco del formulario
$nom_banco = $_POST['nom_banco'];

// Consultar si ya existe un banco con el mismo nombre
$sql = "SELECT * FROM banco WHERE nom_banco = '$nom_banco'";
$result = mysqli_query($conexion, $sql);

// Verificar el número de filas devueltas
if (mysqli_num_rows($result) > 0) {
    // Ya existe un banco con el mismo nombre, muestra un mensaje de error
    echo "Ya existe un banco con ese nombre.";
} else {
    // No existe un banco con el mismo nombre
    echo ""; // Puedes devolver un string vacío o cualquier otro mensaje
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>