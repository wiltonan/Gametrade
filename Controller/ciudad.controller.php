<?php
require_once("../Model/coneXion.php");
require_once("../Model/ciudad.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarciudad':
 		 $ciu_nom=$_POST["ciu_nom"];
 		 $pais_cod=$_POST["pais_cod"];
 		 try {
 		 	Gestion_Ciudad::guardar($ciu_nom,$pais_cod);
 		 	echo 'Trabajando en las alertas, pero se ha guardado con exito.';
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
   		 $ciu_nom=$_POST['ciu_nom'];
   		 $pais_cod=$_POST['pais_cod'];
       $ciu_cod=$_POST['ciu_cod'];

   		 try {
   		 	Gestion_Ciudad::modificar($ciu_nom,$pais_cod,$ciu_cod);
   		 	echo 'Trabajando en las alertas, pero se ha guardado con exito.';
   		 } catch (Exception $e) {
   		 	echo $e;
   		 }
   		break;
 }
?>
