<?php
require_once("../Model/conexion.php");
require_once("../Model/puntos.class.php");

$accion=$_REQUEST['action'];
  switch ($accion) {
    case 'guardarpunto':
      $pto_cant= $_POST['pto_cant'];
      $pto_moneda= $_POST['pto_moneda'];

      try {
      	puntos::guardar($pto_cant,$pto_moneda);
        echo "<script>alert('Se ha guardar el punto');
        self.location.href='../Views/menu_admin.php?#/puntos';
        </script>";
      }
      	catch (Exception $e){
          	echo $e;
      }
      break;

      case 'modificar':
      $pto_cant= $_POST['pto_cant'];
      $pto_moneda=$_POST['pto_moneda'];
      $pto_cod=$_POST['pto_cod'];

      try {
        puntos::modificar($pto_cant,$pto_moneda,$pto_cod);
        echo "<script>alert('Se ha modificado el punto');
        self.location.href='../Views/menu_admin.php?#/puntos';
        </script>";
      }
        catch (Exception $e){
            echo $e;
      }
      break;

      // este tambien hacer parte para eliminar
      // case 'eliminar':
      //   try {
      //     $codigo = base64_decode($_GET['codigo_punto']);
      //     puntos::eliminar_punto($codigo);
      //     echo "<script>alert('Se ha eliminado el punto');
      //     self.location.href='../Views/menu_admin.php?#/puntos';
      //     </script>";
      //   } catch (Exception $e) {
      //     die($e->getMessage() . ' linea: ' . $e->getLine());
      //   }
      //   break;
    }
    ?>
