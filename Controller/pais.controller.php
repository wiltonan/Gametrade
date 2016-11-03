<?php
require_once('../Model/conexion.php');
require_once('../Model/pais.class.php');

$accion=$_REQUEST['action'];
 switch ($accion) {
 	case 'guardarpais':
      $pais_nom=ucfirst($_POST["pais_nom"]);
    
 		 try {
 		 	Gestion_Pais::guardar($pais_nom);
      echo "<script>alert('Se ha guardar el pais');
      self.location.href='../Views/menu_admin.php?#/pais';
      </script>";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':

      $pais_cod=$_POST['pais_cod'];
      $pais_nom=$_POST['pais_nom'];

      try {
        Gestion_Pais::modificar($pais_cod,$pais_nom);
        echo "<script>alert('Se ha modificado el pais');
        self.location.href='../Views/menu_admin.php?#/pais';
        </script>";
        }
        catch (Exception $e){
          echo 'Ocurrio un error' .$e ;
      }
      break;

 }
?>
