<?php
require_once('../Model/conexion.php');
require_once('../Model/registro.class.php');

$accion=$_REQUEST['action'];

 switch ($accion) {

 	case 'guardarusuario':
     $rol_cod='2';
 		 $tipo_cod=$_POST['tipo_cod'];
     $usu_num_docum=$_POST['usu_num_docum'];
 		 $usu_nom=$_POST['usu_nom'];
 		 $usu_apell=$_POST['usu_apell'];
     $usu_nick=$_POST['usu_nick'];
     $usu_mail=$_POST['usu_mail'];
     $usu_pass=$_POST['usu_pass'];
     $encript = password_hash($usu_pass, PASSWORD_DEFAULT);
     $usu_naci=$_POST['usu_naci'];
     $photo=$_POST['photo'];
 		 $usu_tel=$_POST['usu_tel'];
 		 $usu_cel=$_POST['usu_cel'];
 		 $ciu_cod=$_POST['ciu_cod'];
 		 $usu_dir=$_POST['usu_dir'];
     $usu_esp_vive=$_POST['usu_esp_vive'];
     $usu_fech=$_POST['usu_fech'];
     $usu_estado='activo';
 		 try {
 		 	usuario::guardar($rol_cod,$tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$encript,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_esp_vive,$usu_fech,$usu_estado);
 		 	echo 'Guardar con exito';
 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;

  }
?>
