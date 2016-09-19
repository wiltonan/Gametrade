<?php
	class Gestion_Departamento
	{
		public static function guardar($depar_nom,$pais_cod){
			$pdo = ConexionBD::AbrirBD();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql= "INSERT INTO tbl_departamento (depar_nom,pais_cod) values (?,?)";

			$query= $pdo->prepare($sql);
			$query->execute(array($depar_nom,$pais_cod));

			ConexionBD::DesconectarBD();

	}

	public static function cargarpais(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "SELECT * FROM tbl_pais";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query ->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function consultardepartamento(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "SELECT * FROM tbl_departamento";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query ->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function consultarporcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_departamento WHERE depar_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
	}

	public static function modificar($depar_nom,$pais_cod,$estado,$depar_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE tbl_departamento SET depar_nom= ?, pais_cod=?, estado= ? WHERE depar_cod= ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($depar_nom,$pais_cod,$estado,$depar_cod));

		ConexionBD::DesconectarBD();
	}

}
?>
