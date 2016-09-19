<?php
class Gestionar_admin{
	public static function validarAdmi($usuario,$clave){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "SELECT * from tbl_usuario where usu_nick=? and usu_pass=? ";

		$query= $pdo->prepare($sql);
		$query->execute(array($usuario,$clave));

		$result=$query->fetch(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}
}

?>
