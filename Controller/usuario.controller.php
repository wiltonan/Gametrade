<?php
require_once('../Model/conexion.php');
require_once('../Model/usuario.class.php');

$accion=$_REQUEST['action'];
 switch ($accion) {
 	case 'guardarusuario':
     $rol_cod=$_POST['rol_cod'];
 		 $tipo_cod=$_POST['tipo_cod'];
     $usu_num_docum=$_POST['usu_num_docum'];
 		 $usu_nom=$_POST['usu_nom'];
 		 $usu_apell=$_POST['usu_apell'];
     $usu_nick=$_POST['usu_nick'];
     $usu_mail=$_POST['usu_mail'];
     $usu_pass=$_POST['usu_pass'];
     $encript = password_hash($usu_pass, PASSWORD_DEFAULT);
     $usu_naci=$_POST['usu_naci'];
     $photo='';
 		 $usu_tel=$_POST['usu_tel'];
 		 $usu_cel=$_POST['usu_cel'];
 		 $ciu_cod=$_POST['ciu_cod'];
 		 $usu_dir=$_POST['usu_dir'];
     $usu_esp_vive=$_POST['usu_esp_vive'];
     $usu_fech=$_POST['usu_fech'];
     $usu_estado='activo';
 		 try {
 		 	usuario::guardar($rol_cod,$tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$encript,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_esp_vive,$usu_fech,$usu_estado);
      echo "<script>alert('Se ha guardado el usuario');
      self.location.href='../Views/menu_admin.php#/usuario';
      </script>";
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

    case 'modificarusuario':

       $rol_cod=$_POST["cod_rol"];
       $tipo_cod=$_POST["tipo_cod"];
       $usu_num_docum=$_POST["usu_num_docum"];
  		 $usu_nom=$_POST["usu_nom"];
  		 $usu_apell=$_POST["usu_apell"];
       $usu_nick=$_POST["usu_nick"];
       $usu_mail=$_POST["usu_mail"];
       $usu_pass=$_POST["usu_pass"];
       $usu_naci=$_POST["usu_naci"];
  		 $usu_tel=$_POST["usu_tel"];
  		 $usu_cel=$_POST["usu_cel"];
  		 $ciu_cod=$_POST["ciu_cod"];
       $usu_dir=$_POST["usu_dir"];
       $usu_esp_vive=$_POST["usu_esp_vive"];
       $usu_estado=$_POST["usu_estado"];
       $usu_cod=$_POST["usu_cod"];
       try {
         usuario::modificarusuario($rol_cod,$tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_esp_vive,$usu_estado,$usu_cod);
         echo "<script>alert('Se ha modificado el usuario');
         self.location.href='../Views/menu_admin.php#/usuario';
         </script>";
       }
       catch (Exception $e){
           echo "Ocurrio un error".$e ;
       }
      break;
 }
?>
