<?php
class usu_puntos{
  public static function guardar($usu_cod,$pto_cod){
 		$pdo = ConexionBD::AbrirBD();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1="SELECT usu_cod from tbl_usuario WHERE usu_num_docum = ?";
		$query=$pdo->prepare($sql1);
		$query->execute(array($usu_cod));

		$result1=$query->rowCount();
		$codigo=$result1;

    $sql= "INSERT INTO tbl_usuario_x_pto (usu_cod, pto_cod) values(?,?)";

	  $query= $pdo->prepare($sql);
  	$query->execute(array($usu_cod,$pto_cod));
    ConexionBD::DesconectarBD();
  }
}
?>
