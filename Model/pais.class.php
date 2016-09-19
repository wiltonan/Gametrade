<?php
class Gestion_Pais{
	public static function guardar($pais_nom,$estado){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_pais (pais_nom,estado) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($pais_nom,$estado));

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

	public static function modificar($pais_cod,$pais_nom,$estado){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE tbl_pais SET pais_nom= ?, estado= ? WHERE pais_cod= ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($pais_nom,$estado,$pais_cod));

		ConexionBD::DesconectarBD();
	}

	public static function consultarcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_pais WHERE pais_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}
?>
