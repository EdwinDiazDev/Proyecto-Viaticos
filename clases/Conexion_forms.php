<?php 

class conexion extends mysqli
{
	
	function __construct()
	{
		parent::__construct("localhost","root","","proyecto_viaticos2");
	}
}
?>