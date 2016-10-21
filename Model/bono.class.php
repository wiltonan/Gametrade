<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class bono{
  public static function guardar($pto_cod,$bono_desc){
    $pdo = ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tb_bono(pto_cod,bono_desc) values(?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($pto_cod,$bono_desc));

    ConexionBD::DesconectarBD();

  }

  public static function mostrar_bono(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select tb_bono.bono_cod, tb_bono.bono_desc, tbl_pack_punto.pto_cant
          from tb_bono
          inner join tbl_pack_punto
          on tb_bono.pto_cod = tbl_pack_punto.pto_cod";

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

  public static function modificar($pto_cod,$bono_desc,$bono_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tb_bono SET pto_cod= ?, bono_desc= ?  WHERE bono_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($pto_cod,$bono_desc,$bono_cod));

    ConexionBD::DesconectarBD();
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

  // este tambien hacer parte para eliminar
  // public static function eliminar_bono($codigo){
  //   try {
  //     $pdo = ConexionBD::AbrirBD();
  //
  //     $sql = "DELETE FROM tb_bono WHERE bono_cod = ?";
  //     $query = $pdo->prepare($sql);
  //     $query->execute(array($codigo));
  //
  //   } catch (Exception $e) {
  //     echo "Error" . $e->getMessage();
  //   }
  // }
}
  ?>
