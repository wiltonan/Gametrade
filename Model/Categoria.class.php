<?php
class Categoria_jue{
  public static function Guardar($cat_nom, $cat_fech, $cat_desc, $cat_estado){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_categoria_jue(cat_nom, cat_desc, cat_fech, cat_estado) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_nom, $cat_fech, $cat_desc, $cat_estado));

    ConexionBD::DesconectarBD();
}

    public static function Consultar_categoria_juego(){
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "SELECT * FROM tbl_categoria_jue";

	    $query= $pdo->prepare($sql);
    	$query->execute();

    	$result = $query->fetchALL(PDO::FETCH_BOTH);

    	ConexionBD::DesconectarBD();

    	return $result;
 	}

  public static function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_categoria_jue WHERE cat_cod= ?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

 	public static function modificar($cat_nom, $cat_desc, $cat_fech, $cat_estado,$cat_cod){
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "UPDATE tbl_categoria_jue SET cat_nom = ?, cat_desc = ?, cat_fech = ?, cat_estado = ?  WHERE cat_cod = ?";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($cat_nom, $cat_desc, $cat_fech, $cat_estado, $cat_cod));

    	ConexionBD::DesconectarBD();
	}
}
?>
