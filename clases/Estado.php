<?php 
    class Estado{
        function __construct(){
            require_once("Conexion_forms.php");
            $this->conexion=new Conexion();
        }
        function insertar($nom_estado, $fk_pais){
            $consulta="INSERT INTO estado (pk_estado, nom_estado, fk_pais, estatus) VALUES (NULL, '{$nom_estado}', '{$fk_pais}', 1)";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }
        function mostrar(){
            $consulta="SELECT * FROM estado WHERE estatus=1";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }

    }

?>