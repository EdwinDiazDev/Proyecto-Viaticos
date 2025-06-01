<?php
require_once("Conexion.php");

class Usuario {
    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function registrarUsuario($codigo, $nombres, $apaterno, $amaterno, $telefono, $sexo, $contrasena) {
        // Escapar los datos para prevenir inyección SQL
        $codigo = $this->conexion->conexion->real_escape_string($codigo);
        $nombres = $this->conexion->conexion->real_escape_string($nombres);
        $apaterno = $this->conexion->conexion->real_escape_string($apaterno);
        $amaterno = $this->conexion->conexion->real_escape_string($amaterno);
        $telefono = $this->conexion->conexion->real_escape_string($telefono);
        $sexo = $this->conexion->conexion->real_escape_string($sexo);
        $contrasena = $this->conexion->conexion->real_escape_string($contrasena);

        // Hash de la contraseña para almacenarla de forma segura en la base de datos
        $hashContrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        // Insertar datos en la tabla 'persona'
        $insertarPersona = "INSERT INTO persona (nombre, apaterno, amaterno, sexo, telefono) 
        VALUES ('$nombres', '$apaterno', '$amaterno', '$sexo', '$telefono')";

        // Ejecutar consulta para insertar en 'persona'
        $this->conexion->conexion->query($insertarPersona);

        $idPersona = $this->conexion->conexion->insert_id;

        // Insertar datos en la tabla 'usuario' con el ID de la persona como clave foránea
        $insertarUsuario = "INSERT INTO usuario (cod_usuario, contraseña, estatus, fk_persona) 
        VALUES ('$codigo', '$hashContrasena', 'activo', '$idPersona')";

        // Ejecutar consulta para insertar en 'usuario'
        $resultado = $this->conexion->conexion->query($insertarUsuario);

        if ($resultado) {
            return true; 
        } else {
            return false; 
        }
    }

	public function validarCredenciales($codigo, $contrasena) {
        $codigoUsuario = $this->conexion->conexion->real_escape_string($codigo);
        $contrasena = $this->conexion->conexion->real_escape_string($contrasena);
    
        $consulta = "SELECT * FROM usuario WHERE cod_usuario='$codigoUsuario'";
        $resultado = $this->conexion->conexion->query($consulta);
    
        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($contrasena, $usuario['contraseña'])) {
                return true; 
            }
        }
        return false; 
    }
    function mostrarPorId($pk_usuario){
		$consulta="SELECT * FROM usuario WHERE estatus=1 AND pk_usuario='{$pk_usuario}'";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
    
}
?>
