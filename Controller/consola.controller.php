<?php
require_once("../Model/conexion.php");
require_once("../Model/consola.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarconsola':

     $cons_cod=$_POST["cons_cod"];
 		 $cons_nom=$_POST["cons_nom"];
 		 $cons_refer=$_POST["cons_refer"];
 		 $cons_imagen=$_POST["cons_imagen"];
     $cons_estado="activo";

 		 try {
 		 	Gestion_Consola::guardar($cons_nom,$cons_refer,$cons_imagen,$cons_estado,$cons_cod);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':

      $cons_nom=$_POST["cons_nom"];
      $cons_refer=$_POST["cons_refer"];
      $cons_imagen=$_POST["cons_imagen"];
      $cons_estado=$_POST["cons_estado"];
      $cons_cod=$_POST["cons_cod"];
       try {
        Gestion_Consola::modificar($cons_nom,$cons_refer,$cons_imagen,$cons_estado,$cons_cod);
        echo "Modificado con exito";
       } catch (Exception $e) {
        echo $e;
       }
      break;
 }
?>
