<?php 
    class Pais{
        function __construct(){
            require_once("Conexion_forms.php");
            $this->conexion=new Conexion();
        }
        function insertar($nom_pais){
            $consulta="INSERT INTO pais (pk_pais, nom_pais, estatus) VALUES (NULL, '{$nom_pais}', 1)";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }
        function mostrar(){
            $consulta="SELECT * FROM pais WHERE estatus=1";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }

    }

?>