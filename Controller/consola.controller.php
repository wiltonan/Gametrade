<?php
require_once('../Model/conexion.php');
require_once('../Model/consola.class.php');

$accion=$_REQUEST['action'];

 switch ($accion) {
 	case 'guardarconsola':
 		 $cons_nom=$_POST['cons_nom'];
 		 $cons_refer=$_POST['cons_refer'];

 		 try {
 		 	Gestion_Consola::guardar($cons_nom,$cons_refer);
 		 	echo 'Trabajando en las alertas, pero se ha guardado con exito.';
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificar':
      $cons_nom=$_POST['cons_nom'];
      $cons_refer=$_POST['cons_refer'];
      $cons_cod=$_POST['cons_cod'];
       try {
        Gestion_Consola::modificar($cons_nom,$cons_refer,$cons_cod);
        echo 'Trabajando en las alertas, pero se ha guardado con exito.';
       } catch (Exception $e) {
        echo $e;
       }
      break;
 }
?>
