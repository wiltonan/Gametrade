<?php
//aqui se hace la conexion entre la parte que recoge los datos y la base de datos
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

$accion=$_REQUEST['action'];
  switch ($accion) {
    case 'guardarbono':

//en esta parte se guardan los datos en la variable guardarbono que esta encima
    $pto_cod=$_POST['pto_cod'];
    $bono_desc=ucfirst($_POST['bono_desc']);

    //se validan los datos, y le verificamos al usuario si esta guardado o no
    try {
      bono::guardar($pto_cod,$bono_desc);
      echo "<script>alert('Se ha guardar el bono');
      self.location.href='../Views/menu_admin.php?#/bono';
      </script>";
      }
      catch (Exception $e) {
      echo 'No se guardo'.$e;
      }
        break;

        case 'modificar':
          $pto_cod=$_POST['pto_cod'];
          $bono_desc=ucfirst($_POST['bono_desc']);
          $bono_cod=$_POST['bono_cod'];

          try {
            bono::modificar($pto_cod,$bono_desc,$bono_cod);
            echo "<script>alert('Se ha modificado el bono');
            self.location.href='../Views/menu_admin.php?#/bono';
            </script>";
          }
          catch (Exception $e){
              echo 'Ocurrio un error'.$e ;
          }
          break;


        // este tambien hacer parte para eliminar
        // case 'eliminar':
        //   try {
        //     $codigo = base64_decode($_GET['codigo_bono']);
        //     bono::eliminar_bono($codigo);
        //     echo "<script>alert('Se ha eliminado el bono');
        //     self.location.href='../Views/menu_admin.php?#/bono';
        //     </script>";
        //   } catch (Exception $e) {
        //     die($e->getMessage() . ' linea: ' . $e->getLine());
        //   }
        //   break;
}
 ?>
