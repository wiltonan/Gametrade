<?php
require_once("../Model/coneXion.php");
require_once("../Model/ciudad.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarciudad':
 		 $ciu_nom=$_POST["ciu_nom"];
 		 $depar_cod=$_POST["depar_cod"];
 		 try {
 		 	Gestion_Ciudad::guardar($ciu_nom,$depar_cod);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
   		 $ciu_nom=$_POST["ciu_nom"];
   		 $depar_cod=$_POST["depar_cod"];
       $ciu_cod=$_POST["ciu_cod"];

   		 try {
   		 	Gestion_Ciudad::modificar($ciu_nom,$depar_cod,$ciu_cod);
   		 	echo "Guardar con exito";
   		 } catch (Exception $e) {
   		 	echo $e;
   		 }
   		break;

      case 'eliminar':
        try {
          $codigo = base64_decode($_GET["codigo_ciudad"]);
          Gestion_Ciudad::eliminar_ciudad($codigo);
          echo "Eliminado";
        } catch (Exception $e) {
          die($e->getMessage() . " linea: " . $e->getLine());
        }
        break;
 }
?>
