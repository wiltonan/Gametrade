<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class bono{
  public static function guardar($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant){
    $pdo = ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tb_bono(cat_bono_cod,pto_cod,bono_desc,bono_cant) values(?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant));

    ConexionBD::DesconectarBD();

  }

  public static function mostrar_bono(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tb_bono";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;

  }

  public static function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tb_bono WHERE bono_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function modificar($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant,$bono_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tb_bono SET cat_bono_cod= ? ,pto_cod= ?, bono_desc= ?, bono_cant= ? WHERE bono_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_cod,$pto_cod,$bono_desc,$bono_cant,$bono_cod));

    ConexionBD::DesconectarBD();
  }

  public static function mostrarCategoriabono(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_categoria_bono";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

  public static function mostrarpunto(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_pack_punto";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

  public static function eliminar_bono($codigo){
    try {
      $pdo = ConexionBD::AbrirBD();

      $sql = "DELETE FROM tb_bono WHERE bono_cod = ?";
      $query = $pdo->prepare($sql);
      $query->execute(array($codigo));

    } catch (Exception $e) {
      echo "Error" . $e->getMessage();
    }
  }
}
  ?>
