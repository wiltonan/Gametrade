<?php
include_once("../Model/conexion.php");
include_once("../Model/validarUsu.class.php");

$accion= $_POST["v_action"];
//$accion= $_POST["btnusu"];

switch ($accion) {
			case 'GuardarContra':

			$NumC=$_POST["NumC"];
			$ConfirContra=$_POST["ConfirContra"];

			try {
				$resultContrG=Gestionar_Usu::validarGuarContra($NumC,$ConfirContra);

				if ($resultContrG!="") {
					echo "no paso";
				}else{
					echo "({st:'ok'})";
				}

			} catch (Exception $e) {
				echo $e;
			}
			break;
}

?>
