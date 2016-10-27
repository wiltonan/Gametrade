<?php
class Gestion_Videojuego{
	public static function Guardar($documento,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql1="SELECT usu_cod from tbl_usuario WHERE usu_num_docum = ?";
		$query=$pdo-prepare($sql1);
		$query->execute(array($documento));

		$result1=$query->rowCount();
		$codigo=$result1;

		$sql= "INSERT INTO tbl_videojuego (usu_cod,jue_nom,cons_cod,cat_cod,jue_desc,jue_cant,jue_trailer,jue_fech_public,jue_imagen,jue_estado) values (?,?,?,?,?,?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($codigo,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado));

		ConexionBD::DesconectarBD();

	}

	public static function mostrarjuego(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql="select tbl_videojuego.jue_cod, tbl_videojuego.jue_nom, tbl_videojuego.jue_desc, tbl_videojuego.jue_cant, tbl_videojuego.jue_trailer, tbl_videojuego.jue_fech_public, tbl_videojuego.jue_imagen, tbl_videojuego.jue_estado, tbl_usuario.usu_num_docum, tbl_consola.cons_nom, tbl_consola.cons_refer, tbl_categoria_jue.cat_nom
						from tbl_videojuego

						inner join tbl_usuario
						on tbl_videojuego.usu_cod = tbl_usuario.usu_cod

						inner join tbl_consola
						on tbl_videojuego.cons_cod = tbl_consola.cons_cod

						inner join tbl_categoria_jue
						on tbl_videojuego.cat_cod = tbl_categoria_jue.cat_cod";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function consultarporCodigo($codigo){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_videojuego WHERE jue_cod=?";

    $query= $pdo->prepare($sql);
    $query->execute(array($codigo));

    $result= $query->fetch(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

	public static function modificar($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado,$jue_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE tbl_videojuego SET usu_cod= ?, jue_nom=?, cons_cod= ?, cat_cod=?, jue_desc=?, jue_cant=?, jue_trailer=?, jue_fech_public=?, jue_imagen=?, jue_estado=? WHERE jue_cod= ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado,$jue_cod));

		ConexionBD::DesconectarBD();
	}

	public static function mostrarconsola(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_consola";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function mostrarcategoria(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_categoria_jue";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function Buscar_nombre($documento){
      $pdo = ConexionBD::AbrirBD();
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql="SELECT * FROM tbl_usuario WHERE usu_num_docum LIKE concat('%',?,'%')";

      $query= $pdo->prepare($sql);
      $query->execute(array($documento));

      $result= $query->fetchALL(PDO::FETCH_BOTH);

      ConexionBD::DesconectarBD();
      return $result;
    }
 }

?>
