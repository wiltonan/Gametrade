<?php
require_once("../Model/coneXion.php");
require_once("../Model/ciudad.class.php");

$accion=$_REQUEST["action"];

 switch ($accion) {

 	case 'guardarciudad':
 		 $ciu_nom=ucfirst($_POST["ciu_nom"]);
 		 $depar_cod=$_POST["depar_cod"];
 		 try {
 		 	Gestion_Ciudad::guardar($ciu_nom,$depar_cod);
        echo "<script>alert('Se ha guardar la ciudad');
        self.location.href='../Views/menu_admin.php?#/ciudad';
        </script>";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
   		 $ciu_nom=ucfirst($_POST["ciu_nom"]);
   		 $depar_cod=$_POST['depar_cod'];
       $ciu_cod=$_POST['ciu_cod'];

   		 try {
   		 	Gestion_Ciudad::modificar($ciu_nom,$depar_cod,$ciu_cod);
        echo "<script>alert('Se ha modificado la ciudad');
        self.location.href='../Views/menu_admin.php?#/ciudad';
        </script>";
   		 } catch (Exception $e) {
   		 	echo $e;
   		 }
   		break;
 }
?>
