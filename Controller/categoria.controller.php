<?php
require_once('../Model/conexion.php');
require_once('../Model/Categoria.class.php');

$accion=$_REQUEST['action'];
switch ($accion) {

  case 'guardar':
  $cat_nom=$_POST['cat_nom'];

  try {
    Categoria_jue::guardar($cat_nom);
      echo 'Trabajando en las alertas, pero se ha guardado con exito.';
  } catch (Exception $e) {
    echo $e;
  }
  break;

  case 'modificar':
    $cat_cod=$_POST["cat_cod"];
    $cat_nom=$_POST["cat_nom"];

  try {
    Categoria_jue::modificar($cat_nom,$cat_cod);
      echo 'Trabajando en las alertas, pero se ha guardado con exito.';
  } catch (Exception $e) {
    echo $e;
  }
  break;
}
?>
