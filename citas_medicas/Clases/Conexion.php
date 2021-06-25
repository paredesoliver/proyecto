<?php 

class Conexion 
{
	 var $con;
	function __construct()
	{
		$this->con=new mysqli("localhost","root","","citas_medicas");
	}
}

// esto se pone para probar si vale

// $Conexion=new Conexion();

// if($Conexion->con){
// 	echo "conectado";
// }else{
// 	echo "no conectado";
// }

?>