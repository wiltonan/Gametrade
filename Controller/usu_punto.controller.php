<?php
require_once("../Model/conexion.php");
require_once("../Model/usu_punto.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {

   case 'guardar':
    $usu_cod=$_POST['usu_cod'];
    $pto_cod=$_POST['pto_cod'];
    try {
      usu_puntos::guardar($usu_cod,$pto_cod);
      echo "<script>alert('Se asigno los puntos');
      self.location.href='../Views/menu_admin.php?#/usuario_x_puntos';
      </script>";
    } catch (Exception $e) {
        echo $e;
    }

     break;
 }



 ?>
