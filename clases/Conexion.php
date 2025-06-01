<?php
class Conexion {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "proyecto_viaticos2";
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
?>
