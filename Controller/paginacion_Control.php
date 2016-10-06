<?php

include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");


$accion= $_REQUEST["action"];

switch ($accion) {
	case 'Guardar':
		$imagen=$_POST["imagen"];
		$titulo=$_POST["titulo"];
		$descripcion=$_POST["descripcion"];
		$estado=$_POST["estado"];


		try {
			Gestion_pelicula::Paginacion_Buscar($imagen,$titulo,$descripcion,$estado);
		} 
		catch (Exception $e) 
		{
			echo $e;	
		}
		break;


}

?>