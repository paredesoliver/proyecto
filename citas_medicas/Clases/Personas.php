<?php 

require_once("Conexion.php");
 

class Personas extends Conexion
{
	
  	public function credenciales($per_usuario,$per_clave)
  	{
  		return $this->con->query("SELECT * FROM persona WHERE per_usuario='$per_usuario' AND per_clave='$per_clave' ");
  	}

}

?>