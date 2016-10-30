<?php
require_once("../Model/conexion.php");
require_once("../Model/juego_usuario.class.php");

//$documento=$_SESSION["documento"];

$documento="10";

$accion=$_REQUEST["action"];
 switch ($accion) {

 	case 'guardarjuego':
 		
$directorio= "../views/Imagen/usuarios/";

$archivo =basename($_FILES["imagenJueUsu"]["name"]);

$extension_archivo=pathinfo($archivo, PATHINFO_EXTENSION);

$archivo = $directorio.$archivo;


$Comprobar=getimagesize($_FILES["imagenJueUsu"]["tmp_name"]);


if ($Comprobar !==false) {

  if ($_FILES["imagenJueUsu"]["size"]>8388608) {
    echo "la imagen supera el tamaño permitido";
  }else{

    if ($extension_archivo != "jpg" && $extension_archivo != "jpeg" && $extension_archivo != "png") {

      echo "solo puede subir imagenes  jpg o png";
      
    }else{
        
      if (move_uploaded_file($_FILES["imagenJueUsu"]["tmp_name"], $archivo)) {
        
       try {
     $jue_nom=$_POST['jue_nom'];
     $cons_cod=$_POST['cons_cod'];
     $cat_cod=$_POST["cat_cod"];
     $jue_desc=$_POST["jue_desc"];
     $jue_cant=$_POST["jue_cant"];
     $jue_trailer=$_POST["jue_trailer"];
     $jue_fech_public=$_POST["jue_fech_public"];
     $jue_estado="activo";
       Gestion_Videojuego::Guardar($documento,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$archivo,$jue_estado);
       echo "<script>alert('Guardar con exito');
      self.location.href='../Views/menu_usuario.php?#/mis juegos';
      </script>";
  
       } 
       catch (Exception $e)
       {
        echo $e; 
       }
      }else{
        echo "error, ocurrio  el siguiente error<strong>".$_FILES["imagenJueUsu"]["error"]."</strong>";
      }
    }
  }

}else{
  echo "el archivo no es una imagen";
}
 		 // $jue_nom=$_POST['jue_nom'];
 		 // $cons_cod=$_POST['cons_cod'];
 		 // $cat_cod=$_POST["cat_cod"];
 		 // $jue_desc=$_POST["jue_desc"];
 		 // $jue_cant=$_POST["jue_cant"];
 		 // $jue_trailer=$_POST["jue_trailer"];
 		 // $jue_fech_public=$_POST["jue_fech_public"];
 		 // $jue_imagen=$_POST["jue_imagen"];
 		 // $jue_pal_clave=$_POST["jue_pal_clave"];
    //  $jue_estado="activo";

 		 // try {
 		 // 	Gestion_Videojuego::Guardar($documento,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_pal_clave,$jue_estado);
 		 // 	echo "<script>alert('Guardar con exito');
    //   self.location.href='../Views/menu_usuario.php?#/mis juegos';
    //   </script>";
 		 // } catch (Exception $e) {
 		 // 	echo $e;
 		 // }
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
   		 
       $jue_estado=$_POST["jue_estado"];
       $jue_cod=$_POST["jue_cod"];

   		 try {
   		 	Gestion_Videojuego::modificar($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado,$jue_cod);
   		 	echo "Se a modificado con exito con exito";
   		 } catch (Exception $e) {
   		 	echo "errror" .$e;
   		 }
   		break;
 }
?>