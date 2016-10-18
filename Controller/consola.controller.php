<?php
require_once('../Model/conexion.php');
require_once('../Model/consola.class.php');

$accion=$_REQUEST['action'];

 switch ($accion) {
 	case 'guardarconsola':
 		 $cons_nom=$_POST['cons_nom'];
 		 $cons_refer=$_POST['cons_refer'];

 		 try {
 		 	Gestion_Consola::guardar($cons_nom,$cons_refer);
        echo "<script>alert('Se ha guardar la consola');
        self.location.href='../Views/menu_admin.php?#/consolas';
        </script>";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
      $cons_nom=$_POST['cons_nom'];
      $cons_refer=$_POST['cons_refer'];
      $cons_cod=$_POST['cons_cod'];
       try {
        Gestion_Consola::modificar($cons_nom,$cons_refer,$cons_cod);
        echo "<script>alert('Se ha modificado la consola');
        self.location.href='../Views/menu_admin.php?#/consolas';
        </script>";
       } catch (Exception $e) {
        echo $e;
       }
      break;
 }
?>
