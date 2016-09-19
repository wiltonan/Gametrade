<?php
//aqui se hace la conecion entre la parte que recoge los datos y la base de datos
require_once("../Model/conexion.php");
require_once("../Model/categoria_bono.class.php");

$accion=$_REQUEST["action"];

switch ($accion) {

  case 'guardar_cat_bono':

  //en esta parte se guardan los datos en la variable guardarbono que esta encima
  $cat_bono_nom=$_POST["cat_bono_nom"];
  $cat_bono_fech=$_POST["cat_bono_fech"];
  $cat_estado="activo";

  //se validan los datos, y le verificamos al usuario si esta guardado o no
  try {
    categoria_bono::guardar($cat_bono_nom,$cat_bono_fech,$cat_estado);
    header("location:../Views/admin_categoria_bono.php");
  } catch (Exception $e) {
      echo "No guardo"+$e;

  }
    break;

    case 'modificar':
      $cat_bono_nom=$_POST["cat_bono_nom"];
      $cat_bono_fech=$_POST["cat_bono_fech"];
      $cat_bono_cod=$_POST["cat_bono_cod"];
      $cat_estado=$_POST["cat_estado"];

      try {
        categoria_bono::modificar($cat_bono_nom,$cat_bono_fech,$cat_estado,$cat_bono_cod);
        echo "Modifico";
      }
      catch (Exception $e) {
        echo "Ocurrio un error".$e ;
      }
      break;
}
 ?>
