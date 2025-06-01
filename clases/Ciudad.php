<?php 
    class Ciudad{
        function __construct(){
            require_once("Conexion_forms.php");
            $this->conexion=new Conexion();
        }
        function insertar($nom_ciudad, $fk_estado){
            $consulta="INSERT INTO ciudad (pk_ciudad, nom_ciudad, fk_estado, estatus) VALUES (NULL, '{$nom_ciudad}', '{$fk_estado}', 1)";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }
        function mostrar(){
            $consulta="SELECT * FROM ciudad WHERE estatus=1";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }

    }

?>