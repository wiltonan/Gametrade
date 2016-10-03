<?php
class Gestion_Consola{
	public static function guardar($cons_nom,$cons_refer){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_consola (cons_nom,cons_refer) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($cons_nom,$cons_refer));

		ConexionBD::DesconectarBD();

	}

		public static function consulatrconsola(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "SELECT * FROM tbl_consola";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result = $query ->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_consola WHERE cons_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
	}

		public static function modificar($cons_nom,$cons_refer,$cons_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "UPDATE tbl_consola SET cons_nom=?, cons_refer=?  WHERE cons_cod=?";

		$query= $pdo->prepare($sql);
		$query->execute(array($cons_nom,$cons_refer,$cons_cod));

		ConexionBD::DesconectarBD();
	}
}
?>
