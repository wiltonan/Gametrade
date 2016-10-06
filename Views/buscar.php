<?php

include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");
$peliculas=Paginacion_Buscar::consultarlike($_POST["vlparam"]);




function conexion(){

$con = mysql_connect("localhost","root","");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("database", $con);

return($con);

}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta charset="utf8"/>
	
	<link rel="stylesheet" type="text/css" href="stylesSheet/Slider.css"/>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/connection.js"></script>
	<script type="text/javascript" src="js/gweb.js"></script>
	<script type="text/javascript" src="js/mindexC.js"></script>


	<script type="text/javascript">
	$(document).ready(function(){
		$("#txtbuscar").keyup(function(){
			var paramet= $(this).val();
			$.post("listadoajax.php",{vlparam: paramet}, function(data){
				$(".cargarImagen").html(data)
			});
		});
	})
</script>
<style type="text/css">
	

	input[type=text]{
	border: none;
	background: #E6E6E6;
	color: #000;
	width: 80%;
	padding: 5px;
	margin-left: 45px;
	
	margin-top: 15px;
}

form{
	width: 103.4%;
	background:#848484;
	margin-left: -40px;
	padding: 2px 0;
	text-align: center;
	margin-bottom: 20px;
	height: 58px;
}
#ulNoticJue{
	list-style: none;
	width: 400%;
	width: 89%;
	height: 580px;
	background: #fff;
	margin-left: 45px;
	margin-top: 0px;
}
</style>
</head>
<body>
<ul id="ulNoticJue">

<form>
<li ><a href="userperfil.php" >Volver Al Inicio</a>
<input type="text" placeholder="Buscar" id="txtbuscar" />
</form>

<ul class="cargarImagen"> 
	<?php
		foreach ($peliculas as $row ): ?>
		<li><img src="imagen/<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>"></li>
	<?php endforeach; ?>
</ul>
</ul>
</body>
</html>