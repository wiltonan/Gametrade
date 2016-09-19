<?php
//Conexiones para envíar a la BD:
require_once("../Model/conexion.php");
require_once("../Model/noticiaIndex.class.php");

$accion=$_REQUEST["imgV"];
switch ($accion) {
  case 'AgregarVide':


  $video= $_POST["VideoPrincipal"];

  try {
  	noticiaIndex::guardar($video);
    echo "Guardado con &eacute;xito";
  } 
  	catch (Exception $e)

  {
  	echo "No se guard&oacute;" +$e;	
  }

  break;
}
 
?>

