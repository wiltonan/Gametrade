<?php


class registro_class
{
	
	function guardar($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$fecha,$ciudad,$correo,$usuario,$contrasena){
		$pdo = ConexionBD::AbrirBD();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql= "INSERT INTO tbl_usuario (usu_tip_docum,usu_num_docum,usu_pass,usu_nick,usu_nom,usu_apell,rol_cod,usu_tel,usu_naci,usu_cel,usu_dir,usu_mail,ciu_cod,usu_estado,usu_fech) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$query= $pdo->prepare($sql);
		$query->execute(array($codigoRol,$estado,$tipDocument,$numDocum,$nombre,$apellido,$nacimiento,$telefono,$celphone,$direccion,$fecha,$ciudad,$correo,$usuario,$contrasena));

		ConexionBD::DesconectarBD();

	}
}

?>