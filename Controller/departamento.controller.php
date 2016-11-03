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

    // case 'modificar':
   // 		 $ciu_nom=$_POST['ciu_nom'];
   // 		 $pais_cod=$_POST['pais_cod'];
    //    $ciu_cod=$_POST['ciu_cod'];
    //
   // 		 try {
   // 		 	Gestion_Ciudad::modificar($ciu_nom,$pais_cod,$ciu_cod);
    //     echo "<script>alert('Se ha modificado la ciudad');
    //     self.location.href='../Views/menu_admin.php?#/ciudad';
    //     </script>";
   // 		 } catch (Exception $e) {
   // 		 	echo $e;
   // 		 }
   // 		break;
 }
?>
