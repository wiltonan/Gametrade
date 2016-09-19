<?php
	class Gestion_Ciudad{
		public static function guardar($ciu_nom,$depar_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_ciudad (ciu_nom,depar_cod) values (?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_nom,$depar_cod));

		ConexionBD::DesconectarBD();
	}

	public static function mostrardepartamento(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_departamento";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function mostrarciudad(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_ciudad";

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


		public static function modificar($ciu_nom,$depar_cod,$ciu_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "UPDATE tbl_ciudad SET ciu_nom=?, depar_cod=? WHERE ciu_cod=?";

		$query= $pdo->prepare($sql);
		$query->execute(array($ciu_nom,$depar_cod,$ciu_cod));

		ConexionBD::DesconectarBD();
	}

	public static function eliminar_ciudad($codigo){
    try {
      $pdo = ConexionBD::AbrirBD();

      $sql = "DELETE FROM tbl_ciudad WHERE ciu_cod = ?";
      $query = $pdo->prepare($sql);
      $query->execute(array($codigo));

    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  }

}

?>
