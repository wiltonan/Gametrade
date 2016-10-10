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
	

</style>
</head>
<body>

<header id="main-header">
		<div id="res"></div>
		<a id="logo-header" href="#">
			<span class="site-name">Anderson correa</span>
			<span class="site-desc">1800 puntos</span>
		</a> <!-- / #logo-header -->

		<nav>

			<ul>
			
				<li><a href="userperfil.php">Inicio</a>

				<li><a href="buscar.php">Buscar</a>


				</li>

				<li><a href="misjuegos.php">Mis juegos</a></li>

					<li ><a style="color: #fff" href="index.php">Cerrar seccion</a></li>
			</ul>	
				
			
		</nav><!-- / nav -->
 
	</header>

<ul id="ulNoticJue">

<form>

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