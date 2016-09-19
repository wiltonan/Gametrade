<?php
 class puntos{
 	public static function guardar($pto_cant, $pto_moneda, $pto_desc){
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "INSERT INTO tbl_pack_punto (pto_cant, pto_moneda, pto_desc) values(?,?,?)";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($pto_cant, $pto_moneda, $pto_desc));

    	ConexionBD::DesconectarBD();
 	}

    public static function consultarpunto(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "SELECT * FROM tbl_pack_punto";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result = $query ->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function consultarcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_pack_punto WHERE pto_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function modificar($pto_cant,$pto_moneda,$pto_desc,$pto_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tbl_pack_punto SET pto_cant= ?, pto_moneda= ?, pto_desc=?  WHERE pto_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($pto_cant,$pto_moneda,$pto_desc,$pto_cod));

    ConexionBD::DesconectarBD();
  }

  public static function eliminar_punto($codigo){
    try {
      $pdo = ConexionBD::AbrirBD();

      $sql = "DELETE FROM tbl_pack_punto WHERE pto_cod = ?";
      $query = $pdo->prepare($sql);
      $query->execute(array($codigo));

    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  }
 }
 ?>
