<?php 
require_once("Personas.php");
$Personas=new Personas();
$per_usuario=$_POST['per_usuario'];
$per_clave=$_POST['per_clave'];

$usuario=mysqli_fetch_all( $Personas->credenciales($per_usuario,$per_clave) );

print_r($usuario);
?>