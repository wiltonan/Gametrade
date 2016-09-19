
<?php

 class noticiaIndex
 {
 	
 	function guardar($video)
 	{
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "INSERT INTO tbl_noticia(noti_nom) values(?)";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($video));

    	ConexionBD::DesconectarBD();
 	}


 	function guardarSlider($video)
 	{
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "INSERT INTO tbl_noticia(noti_nom) values(?)";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($video));

    	ConexionBD::DesconectarBD();
 	}

 		function guardarNoticia($noticia)
 	{
 		$pdo = ConexionBD::AbrirBD();
    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	$sql= "INSERT INTO tbl_noticia(noti_nom) values(?)";

	    $query= $pdo->prepare($sql);
    	$query->execute(array($video));

    	ConexionBD::DesconectarBD();
 	}
 } 
 ?>