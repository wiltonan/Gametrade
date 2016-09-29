<?php
include_once("../Model/conexion.php");
include_once("../Model/validarUsu.class.php");

$accion= $_POST["v_action"];
//$accion= $_POST["btnusu"];

switch ($accion) {

	case 'Consultar':

		$usua=$_POST["usua"];
		$pass=$_POST["pass"];

		try {
			$result=Gestionar_Usu::validarUsu($usua,$pass);

			if ($result!="" ) {
				if(password_verify($pass,$result['usu_pass']))

				$_SESSION['usu_nom'] =$result['usu_nom'];

				if ($result['cod_rol']==1) {
						echo "({nombre:'admi',st:'ok'})";
				}

				else {
					echo "({nombre:'user',st:'ok'})";
				}
			}
			else {
				echo "({st:'fall'})";
			}

		} catch (Exception $e) {
			echo $e;
		}
		break;

		case 'ConsultarContra':

		$contra=$_POST["contra"];

		try {
			$resultContr=Gestionar_Usu::validarContra($contra);

			if ($resultContr!="") {
				echo "({st:'ok'})";
			}else{
				echo "no paso";
			}


		} catch (Exception $e) {
			echo $e;
		}
			break;


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
