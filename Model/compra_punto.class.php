<?php
class Gestion_puntos{
	public static function guardarpuntos($punto,$documento){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_usuario_x_pto (pto_cod,usu_cod) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($punto,$documento));

		ConexionBD::DesconectarBD();

	}

}

?>