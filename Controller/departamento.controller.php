<?php
require_once("../Model/conexion.php");
require_once("../Model/departamento.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {
 	case 'guardardepartamento':
 		 $nombre=ucfirst($_POST["nombre"]);
 		 $pais_cod=$_POST["pais_cod"];
 		 try {
 		 	Gestion_departamento::guardar($nombre,$pais_cod);
        echo "<script>alert('Se ha guardar el departamento');
        self.location.href='../Views/menu_admin.php?#/departamento';
        </script>";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
   		 $nombre=ucfirst($_POST["nombre"]);
   		 $pais_cod=$_POST['pais_cod'];
       $depar_cod=$_POST['depar_cod'];

   		 try {
   		 	Gestion_departamento::modificar($nombre,$pais_cod,$depar_cod);
        echo "<script>alert('Se ha modificado el departamento');
        self.location.href='../Views/menu_admin.php?#/departamento';
        </script>";
   		 } catch (Exception $e) {
   		 	echo $e;
   		 }
   		break;
 }
?>
