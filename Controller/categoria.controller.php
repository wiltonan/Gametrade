<?php
require_once('../Model/conexion.php');
require_once('../Model/Categoria.class.php');

$accion=$_REQUEST['action'];
switch ($accion) {

  case 'guardar':
  $cat_nom=$_POST['cat_nom'];

  try {
    Categoria_jue::guardar($cat_nom);
    echo "<script>alert('Se ha guardar la categoria de juego');
    self.location.href='../Views/menu_admin.php?#/categoria_juegos';
    </script>";
  } catch (Exception $e) {
    echo $e;
  }
  break;

  case 'modificar':
    $cat_cod=$_POST["cat_cod"];
    $cat_nom=$_POST["cat_nom"];

  try {
    Categoria_jue::modificar($cat_nom,$cat_cod);
    echo "<script>alert('Se ha modificado la categoria de juego');
    self.location.href='../Views/menu_admin.php?#/categoria_juegos';
    </script>";
  } catch (Exception $e) {
    echo $e;
  }
  break;
}
?>
