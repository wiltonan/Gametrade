<?php
require_once("../Model/conexion.php");
require_once("../Model/juego_admi.class.php");

$accion=$_REQUEST["action"];
 switch ($accion) {

 	case 'guardarjuego':
 		 $usu_cod=$_POST["usu_cod"];
 		 $jue_nom=$_POST["jue_nom"];
 		 $cons_cod=$_POST["cons_cod"];
 		 $cat_cod=$_POST["cat_cod"];
 		 $jue_desc=$_POST["jue_desc"];
 		 $jue_cant=$_POST["jue_cant"];
 		 $jue_trailer=$_POST["jue_trailer"];
 		 $jue_fech_public=$_POST["jue_fech_public"];
 		 $jue_imagen=$_POST["jue_imagen"];
 		 $jue_pal_clave=$_POST["jue_pal_clave"];
     $jue_estado="activo";

 		 try {
 		 	Gestion_Videojuego::Guardar($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_pal_clave,$jue_estado);
 		 	echo "Guardar con exito";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;


    case 'modificar':
   		 $usu_cod=$_POST["usu_cod"];
   		 $jue_nom=$_POST["jue_nom"];
   		 $cons_cod=$_POST["cons_cod"];
   		 $cat_cod=$_POST["cat_cod"];
   		 $jue_desc=$_POST["jue_desc"];
   		 $jue_cant=$_POST["jue_cant"];
   		 $jue_trailer=$_POST["jue_trailer"];
   		 $jue_fech_public=$_POST["jue_fech_public"];
   		 $jue_imagen=$_POST["jue_imagen"];
   		 $jue_pal_clave=$_POST["jue_pal_clave"];
       $jue_estado=$_POST["jue_estado"];
       $jue_cod=$_POST["jue_cod"];

   		 try {
   		 	Gestion_Videojuego::modificar($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_pal_clave,$jue_estado,$jue_cod);
   		 	echo "Se a modificado con exito con exito";
   		 } catch (Exception $e) {
   		 	echo "errror" .$e;
   		 }
   		break;
 }
?>
