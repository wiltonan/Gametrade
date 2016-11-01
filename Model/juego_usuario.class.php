<?php
class Gestion_Videojuego{
	public static function Guardar($documento,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_videojuego (usu_cod,jue_nom,cons_cod,cat_cod,jue_desc,jue_cant,jue_trailer,jue_fech_public,jue_imagen,jue_estado) values (?,?,?,?,?,?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($documento,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado));

		ConexionBD::DesconectarBD();

	}

	public static function guardarJuegUsuario($jue_cod,$usu_coment,$usu_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "INSERT INTO tbl_usuario_x_viedojuego (usu_cod,jue_cod,desce) values (?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($usu_cod,$jue_cod,$usu_coment));

		ConexionBD::DesconectarBD();

	}

	public static function mostrarjuego(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_usuario_x_viedojuego";

		$query= $pdo->prepare($sql);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

		ConexionBD::DesconectarBD();

		return $result;
	}

	public static function comprajuego(){

		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql= "select * from tbl_videojuego";

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



  function consultcomprajuego($codigo){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "select * from tbl_videojuego where jue_cod=?";

		$query= $pdo->prepare($sqlP);
		$query->execute(array($codigo));

		$result=$query->fetchALL(PDO::FETCH_BOTH);
		ConexionBD::DesconectarBD();
			return $result;
	}


  public static function consultarcategoria(){
    $pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="select * from tbl_categoria_jue";

    $query= $pdo->prepare($sql);
    $query->execute();

    $result= $query->fetchALL(PDO::FETCH_BOTH);

    ConexionBD::DesconectarBD();

    return $result;
  }

	public static function modificar($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado,$jue_cod){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql="UPDATE tbl_videojuego SET usu_cod= ?, jue_nom=?, cons_cod= ?, cat_cod=?, jue_desc=?, jue_cant=?, jue_trailer=?, jue_fech_public=?, jue_imagen=?,  jue_estado=? WHERE jue_cod= ?";
		$query= $pdo->prepare($sql);
		$query->execute(array($usu_cod,$jue_nom,$cons_cod,$cat_cod,$jue_desc,$jue_cant,$jue_trailer, $jue_fech_public,$jue_imagen,$jue_estado,$jue_cod));

		ConexionBD::DesconectarBD();
	}

// 	public static function consultarcedula(){
//     $pdo = ConexionBD::AbrirBD();
//     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//     $sql="select usu_cod,usu_nom from tbl_usuario WHERE usu_num_docum=?"

//     $query= $pdo->prepare($sql);
//     $query->execute();

//     $result= $query->fetch(PDO::FETCH_BOTH);

//     ConexionBD::DesconectarBD();

//     return $result;
//   }
 }

?>
