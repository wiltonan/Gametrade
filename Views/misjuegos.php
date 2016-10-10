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

body {
	margin: 0%;
	padding: 0%;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background-image: url(Imagen/ver.jpg); 
	font-size: 1em;
	line-height: 1.5em;
}
 
h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}
 
p {
	margin: 0 0 1.5em 0;
}
 
img {
	max-width: 100%;
	height: auto;
}

#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}
 
/*
 * Logo
 */
#logo-header {

	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	
 
/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}
/*ancho de la mitad*/

				#main-content {
	background: #FAFAFA;
	width: 80%;
	max-width: 1300px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}
 
	#main-content header,
	#main-content .content {
		padding: 45px;
	}


	#main-footer {
		text-align: center;
	background: #333;
	color: white;
	
	padding: 20px;
	margin-top: 85px;
}
	#main-footer p {
		margin: 0;
		text-align: center;
	}
	
	#main-footer a {
		color: white;

	}

	#e64LogoU{
	width: 52px;
	height: 48px;
	background: url(../imagen/logoU.png) no-repeat;
	display: inline-block;

}

#e64Noticia{
	width: 99%;
	height: 63px;
	background: #FF0000;
	font-size: 40px;
	padding-left: 30px !important;
	padding-top: 5px;
	color: #fff;	
}

#e64ConteNoti{
	width:75%;
	height: 800px;
	display: inline-block;
	background: #000;
	overflow: hidden;
	margin-top: -200px;
}

#res{
	display: inline-block;
	width: 52px;
	height: 48px;
	background:url(Imagen/logoU.png); 
}

#logo-header{
	display: inline-block;
}



#dvSlider{
	width: 101%;
	height: 450px;
	background: url(../Imagen/slider.png);
	overflow: hidden;
	vertical-align: top;
	margin-top: -38px;


}

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