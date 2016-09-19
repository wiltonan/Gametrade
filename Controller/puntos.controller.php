<?php
require_once("../Model/conexion.php");
require_once("../Model/puntos.class.php");

$accion=$_REQUEST["action"];

  switch ($accion) {

    case 'guardarpunto':
    $pto_cant= $_POST["pto_cant"];
    $pto_moneda= $_POST["pto_moneda"];
    $pto_desc= $_POST["pto_desc"];

  try {
  	puntos::guardar($pto_cant,$pto_moneda,$pto_desc);
    echo "Guardado con exito";
  }
  	catch (Exception $e){
      	echo $e;
  }
  break;

  case 'modificar':
  $pto_cant= $_POST["pto_cant"];
  $pto_moneda=$_POST["pto_moneda"];
  $pto_desc=$_POST["pto_desc"];
  $pto_cod=$_POST["pto_cod"];

  try {
    puntos::modificar($pto_cant,$pto_moneda,$pto_desc,$pto_cod);
    echo "Guardado con exito";
  }
    catch (Exception $e){
        echo $e;
  }
  break;

  case 'eliminar':
    try {
      $codigo = base64_decode($_GET["codigo_punto"]);
      puntos::eliminar_punto($codigo);
      echo "Eliminado";
    } catch (Exception $e) {
      die($e->getMessage() . " linea: " . $e->getLine());
    }
    break;
}
?>
