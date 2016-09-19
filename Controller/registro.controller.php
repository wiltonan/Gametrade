<?php
require_once("../Model/conexion.php");
require_once("../Model/registroUsu.class.php");

$accion=$_POST["v_action"];
//$accion=$_POST["action"];

 switch ($accion) {
 	case 'guardar':

 		
		 $fecha="2016/08/07";
 		 $codigoRol=$_POST["codigoRol"];
 		 $estado=$_POST["estado"];
 		 $tipDocument=$_POST["tipDocument"];
 		 $numDocum=$_POST["numDocum"];
 		 $nombre=$_POST["nombre"];

 		 $apellido=$_POST["apellido"];
 		 $nacimiento=$_POST["nacimiento"];
 		 $telefono=$_POST["telefono"];
 		 $celphone=$_POST["celphone"];
 		 $direccion=$_POST["direccion"];

 		 $ciudad=$_POST["ciudad"];
 		 $correo=$_POST["correo"];
 		 $usuario=$_POST["usuario"];

 		 $contrasena=$_POST["contrasena"];
 		// $photo=$_POST["photo"];*/


 		 try {
 		 	registro_class::guardar($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$fecha,$ciudad,$correo,$usuario,$contrasena);
 		 	
 		 	echo "({st:'ok'})";

 		 } catch (Exception $e) {
 		 	echo $e;
 		 }
 		break;
 	
 	default:
 		# code...
 		break;
 }



 /*$codigoRol=2;
		 $estado=1;
		 $fecha="2016/08/07";
 		 $tipDocument=$_POST["cbTipDocum"];
 		 $numDocum=$_POST["numDocument"];
 		 $nombre=$_POST["nameRegist"];
 		 $apellido=$_POST["lastRegist"];
 		 $nacimiento=$_POST["bornRegist"];
 		 $telefono=$_POST["phoneRegist"];
 		 $celphone=$_POST["CelphoneRegist"];
 		 $direccion=$_POST["addressRegist"];
 		 $ciudad=$_POST["cbCiudad"];
 		 $correo=$_POST["emailRegist"];
 		 $usuario=$_POST["nickRegist"];
 		 $contrasena=$_POST["passRegist"];*/
?>