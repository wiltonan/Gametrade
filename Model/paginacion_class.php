<?php

/**
* 
*/
class Paginacion_Buscar
{
	
	function Guardar($imagen,$titulo,$descripcion,$estado){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "INSERT INTO tbl_videojuego (imagen,titulo,descripcion,estado) values (?,?,?,?)";

		$query= $pdo->prepare($sqlP);
		$query->execute(array($imagen,$titulo,$descripcion,$estado));

		ConexionBD::DesconectarBD();
	}
	
	function consultar(){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "select * from tbl_videojuego";

		$query= $pdo->prepare($sqlP);
		$query->execute();

		$result=$query->fetchALL(PDO::FETCH_BOTH);

	
		ConexionBD::DesconectarBD();
			return $result;
	}

	function consultarlike($pelic){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sqlP= "SELECT * FROM peliculas WHERE titulo  LIKE CONCAT('%',?,'%') ";

		$query= $pdo->prepare($sqlP);
		$query->execute(array($imagen));

		$result=$query->fetchALL(PDO::FETCH_BOTH);

	
		ConexionBD::DesconectarBD();
			return $result;
	}


}
?>