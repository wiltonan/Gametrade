<?php
  class usuario{
    public static function guardar($tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado){

    $pdo = ConexionBD::AbrirBD();

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO tbl_usuario(tipo_cod,usu_num_docum,usu_nom,usu_apell,usu_nick,usu_mail,usu_pass,usu_naci,photo,usu_tel,usu_cel,ciu_cod,usu_dir,usu_fech,usu_estado) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $query= $pdo->prepare($sql);
    $query->execute(array($tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_fech,$usu_estado));

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

  public static function mostrarusuario(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select tbl_usuario.usu_cod, tbl_usuario.usu_num_docum, tbl_usuario.usu_nom, tbl_usuario.usu_apell, tbl_usuario.usu_nick, tbl_usuario.usu_mail, tbl_usuario.usu_pass, tbl_usuario.usu_naci,  tbl_usuario.usu_tel, tbl_usuario.usu_cel, tbl_usuario.usu_dir, tbl_usuario.usu_fech, tbl_usuario.usu_estado, tbl_tipodocumento.tipo_documento, tbl_ciudad.ciu_nom
            from tbl_usuario
            inner join tbl_tipodocumento
            on tbl_usuario.tipo_cod = tbl_tipodocumento.tipo_cod
            inner join tbl_ciudad
            on tbl_usuario.ciu_cod = tbl_ciudad.ciu_cod";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

  public static function modificarusuario($tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_estado,$usu_cod){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="UPDATE tbl_usuario SET tipo_cod=? ,usu_num_docum=? ,usu_nom=? ,usu_apell=? ,usu_nick=? ,usu_mail=? ,usu_pass=? ,usu_naci=? ,photo=? ,usu_tel=? ,usu_cel=? ,ciu_cod=? ,usu_dir=? ,usu_estado=? WHERE usu_cod= ?";
    $query= $pdo->prepare($sql);
    $query->execute(array($tipo_cod,$usu_num_docum,$usu_nom,$usu_apell,$usu_nick,$usu_mail,$usu_pass,$usu_naci,$photo,$usu_tel,$usu_cel,$ciu_cod,$usu_dir,$usu_estado,$usu_cod));

    ConexionBD::DesconectarBD();
  }

  public static function consultarcodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_usuario WHERE usu_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }
}
 ?>
