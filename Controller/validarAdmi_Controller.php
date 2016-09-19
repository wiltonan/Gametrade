<?php
session_start();
include_once("../Model/conexion.php");
include_once("../Model/ValidarAdmi_class.php");
$accion =$_REQUEST["Vadmi"];

switch ($accion) {
	case 'c':

		$usuario=$_POST["txtUsuadmi"];
		$clave=$_POST["txtClaveadmi"];

		try {
			$result=Gestionar_admin::validarAdmi($usuario,$clave);

			$_SESSION['usu_nom'] =$result['usu_nom'];
			$_SESSION['photoUsu'] =$result['photo'];
			header("location:../Views/index_admi.php");
		} catch (Exception $e) {
			echo $e;
		}

}

?>
