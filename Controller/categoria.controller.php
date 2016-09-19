<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria.class.php");

$accion=$_REQUEST["action"];
switch ($accion) {

  case 'guardar':
  $cat_nom=$_POST["cat_nom"];
  $cat_desc=$_POST["cat_desc"];
  $cat_fech=$_POST["cat_fech"];
  $cat_estado="activo";

  try {
    Categoria_jue::guardar($cat_nom,$cat_desc,$cat_fech,$cat_estado);
    echo "Guardado con exito";
  } catch (Exception $e) {
    echo $e;
  }
  break;

  case 'modificar':
    $cat_cod=$_POST["cat_cod"];
    $cat_nom=$_POST["cat_nom"];
    $cat_desc=$_POST["cat_desc"];
    $cat_fech=$_POST["cat_fech"];
    $cat_estado=$_POST["cat_estado"];


  try {
    Categoria_jue::modificar($cat_nom,$cat_desc,$cat_fech,$cat_estado,$cat_cod);
    echo "Modificado con exito";
  } catch (Exception $e) {
    echo $e;
  }
  break;
}
?>
