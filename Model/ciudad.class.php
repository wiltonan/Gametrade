<?php
	class Gestion_Ciudad{
		public static function guardar($ciu_nom,$pais_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_ciudad (ciu_nom,pais_cod) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_nom,$pais_cod));

		ConexionBD::DesconectarBD();
	}

	public static function mostrarpais(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_pais";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function mostrarciudad(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="select tbl_ciudad.ciu_cod, tbl_ciudad.ciu_nom, tbl_pais.pais_nom
          from tbl_ciudad
          inner join tbl_pais
          on tbl_ciudad.pais_cod = tbl_pais.pais_cod";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_ciudad WHERE ciu_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

		public static function modificar($ciu_nom,$pais_cod,$ciu_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "UPDATE tbl_ciudad SET ciu_nom=?, pais_cod=? WHERE ciu_cod=?";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_nom,$pais_cod,$ciu_cod));

		ConexionBD::DesconectarBD();
	}

}

?>
