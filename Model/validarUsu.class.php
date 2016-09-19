<?php
/**
* 
*/
class Gestionar_Usu
{
	
	function validarUsu($usuario,$clave)
	{
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "SELECT * from tbl_usuario where usu_nick=? and usu_pass=? ";

		$query= $pdo->prepare($sql);
		$query->execute(array($usuario,$clave));

		$result=$query->fetch(PDO::FETCH_BOTH);
		

		ConexionBD::DesconectarBD();

			return $result;
	}

	function validarContra($contra){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlC= "SELECT usu_num_docum from tbl_usuario where usu_num_docum=?";

		$query= $pdo->prepare($sqlC);
		$query->execute(array($contra));

		$result=$query->fetch(PDO::FETCH_BOTH);
		

		ConexionBD::DesconectarBD();

			return $result;
	}

	function validarGuarContra($NumC,$ConfirContra){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlC= "UPDATE tbl_usuario set usu_pass=? where usu_num_docum=? ";

		$query= $pdo->prepare($sqlC);
		$query->execute(array($ConfirContra,$NumC));

		
		ConexionBD::DesconectarBD();
	}
}

?>