<?php 
    class Banco{
        function __construct(){
            require_once("Conexion_forms.php");
            $this->conexion=new Conexion();
        }
        function insertar($nom_banco){
            $consulta="INSERT INTO banco (pk_banco, nom_banco, estatus) VALUES (NULL, '{$nom_banco}', 1)";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }
        function mostrar(){
            $consulta="SELECT * FROM banco WHERE estatus=1";
            $resultado=$this->conexion->query($consulta);
            return $resultado;
        }

    }

?>