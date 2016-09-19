<!--aqui recojemos los datos y los llevamos a la base de datos-->
<?php
class categoria_bono{
  public static function guardar($cat_bono_nom,$cat_bono_fech,$cat_estado){
    $pdo= ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_categoria_bono(cat_bono_nom,cat_bono_fech,cat_estado) values (?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($cat_bono_nom,$cat_bono_fech,$cat_estado));

    ConexionBD::DesconectarBD();

  }

  public static function mostrar_categoria_bono(){
    $pdo= ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_categoria_bono";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function consultarporCodigo($catbono){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_categoria_bono WHERE cat_bono_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($catbono));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function modificar($cat_bono_nom,$cat_bono_fech,$cat_estado,$cat_bono_cod){
  $pdo=ConexionBD::AbrirBD();
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql="UPDATE tbl_categoria_bono SET cat_bono_nom= ?, cat_bono_fech=?, cat_estado=? WHERE cat_bono_cod=?";
  $query= $pdo->prepare($sql);
  $query->execute(array($cat_bono_nom,$cat_bono_fech,$cat_estado,$cat_bono_cod));

  ConexionBD::DesconectarBD();

  }
}
 ?>
