<?php
  class usuario{
    public static function guardar($rol_cod,$tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$encript,$usu_naci,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_esp_vive,$usu_fech,$usu_estado,$puntos){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_usuario(cod_rol,tipo_cod,usu_num_docum,usu_nom,usu_apell,usu_nick,usu_mail,usu_pass,usu_naci,usu_tel,usu_cel,ciu_cod,usu_dir,usu_esp_vive,usu_fech,usu_estado) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $query= $pdo->prepare($sql);

    $query->execute(array($rol_cod,$tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$encript,$usu_naci,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_esp_vive,$usu_fech,$usu_estado));

    // $sql1="SELECT usu_cod from tbl_usuario WHERE usu_num_docum = ?";
    // $query=$pdo->prepare($sql1);
    // $query->execute(array($usu_num_docum));
    //
    // $result1=$query->fetch(PDO::FETCH_BOTH);
    // $codigo=$result1[0];
    //
    // $sql2"INSERT INTO tbl_usuario_x_pto(usu_cod,pto_cod) values (?,?)";
    // $query=$pdo->prepare($sql2);
    // $query->execute(array($codigo,$puntos));

    ConexionBD::DesconectarBD();
    }

    public static function consultarcodigo2($usu_num_docum){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql1="SELECT usu_cod from tbl_usuario WHERE usu_num_docum = ?";
      $query=$pdo->prepare($sql1);
      $query->execute(array($usu_num_docum));

      $result1=$query->fetch(PDO::FETCH_BOTH);

      ConexionBD::DesconectarBD();

      return $result1;
    }

    public static function ingresarpuntos($codigocons,$puntos){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $sql2="INSERT INTO tbl_usuario_x_pto (usu_cod, pto_cod) values (?,?)";
      $query=$pdo->prepare($sql2);
      $query->execute(array($codigocons,$puntos));
      ConexionBD::DesconectarBD();
    }

  public static function consultarciudad(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "select * from tbl_ciudad";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result=$query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function consultardocumento(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql= "select * from tbl_tipodocumento";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result=$query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}
 ?>
