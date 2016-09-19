<?php
/*este es para validar el ingreso de un usuario*/
session_start();
if (!isset($_SESSION['usu_nom']))	 {
	header("Location:admin.php");
}
/*este es la conexion a la base de datos*/
require_once("../Model/conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle_admi.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/estilo.css"/>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/gmindex_admi.js"></script>
</head>
<body>
	<!--este trae el menu-->
<?php include("header_admi.php");?>

<!--esta es la parte que esta relacionada con el menu-->
<section id="stMain">

</section>

<section id="stA_usuario">

</section>

<section id="stA_nacionalidad">
	<div id="dvPais"></div>
	<div id="dvDepartament"></div>
	<div id="dvCiudad"></div>
</section>

<section id="stA_Consola">

</section>

<section id="stA_Puntos">

</section>

<section id="stA_Categoria">

</section>

<section id="stA_juego">

</section>

<section id="stA_Bono">

</section>

<section id="stA_categoriabono">

</section>

</body>
</html>
