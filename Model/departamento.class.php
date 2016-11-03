<?php
  class Gestion_departamento{
    public static function guardar($nombre,$pais_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "INSERT INTO tbl_departamento (nombre,pais_cod) values (?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($nombre,$pais_cod));

    ConexionBD::DesconectarBD();
  }

  public static function mostrardepartamento(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select tbl_departamento.nombre, tbl_pais.pais_nom
            from tbl_departamento

            inner join tbl_pais
            on tbl_departamento.pais_cod = tbl_pais.pais_cod";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

  public static function consultarcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_departamento WHERE depar_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}

 ?>
