<?php

include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");
$peliculas=Paginacion_Buscar::consultarlike($_POST["vlparam"]);
?>







<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>usuario</title>

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




 
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
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

#e63JueDestac{
	width: 91.8%;
	height: 25px;
	background: #01DF3A;
	font-size: 28px;
	padding-left: 10px;
	padding-top: 18px;
	color: #FFFF00;
	margin-left: 44px;
	margin-top: -51px;
	text-align: center;

}

#ulNoticJue{
	list-style: none;
	width: 89%;
	height: 312px;
	background: #000;
	margin-left: 45px;
	margin-top: 6px;
}

#e63JueDesta{
	width: 91.8%;
	height: 28px;
	background: #01DF3A;
	font-size: 28px;
	padding-left: 10px;
	padding-top: 28px;
	color: #FFFF00;
	margin-left: 44px;
	margin-top: -18px;
	text-align: center;
	


}


input[type=text]{
	border: none;
	background: #fff;
	color: #fff;
	width: 40%;
	padding: 5px;
	margin-left: 45px;
}

form{
	width: 98%;
	
	
	padding: 2px 0;
	text-align: center;
	margin-bottom: 20px;
}







</style>


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
			
				<li><a href="#">Inicio</a>

				<li><a href="buscar.php">Buscar</a>


				</li>

				<li><a href="misjuegos.php">Mis juegos</a></li>

					<li ><a style="color: #fff" href="index.php">Cerrar seccion</a></li>
			</ul>	
				
			
		</nav><!-- / nav -->
 
	</header><!-- / #main-header -->
	
	<section id="main-content">

	
		<article>
		<div id="e63JueDesta">VideoJuegos Mas Nuevos</div>
			<header>


			<div id="dvSlider">
		<div id="captioned-gallery">
			<figure class="slider">
				<figure>
					<img src="Imagen/09.jpg" alt>
					<figcaption style="color: #E6E6E6">ADQUIERELO POR TAN SOLO 1850 PUNTOS</figcaption>
				</figure>
				<figure>
					<img src="Imagen/08.jpg" alt>
					<figcaption style="color: #E6E6E6"> ADQUIERELO POR TAN SOLO 1850 PUNTOS</figcaption>
				</figure>

                <figure>
					<img src="Imagen/mara.jpg" alt>
					<figcaption style="color: #E6E6E6">ADQUIERELO POR TAN SOLO 1850 PUNTOS</figcaption>
				</figure>

				<figure>
					<img src="Imagen/10.jpg" alt>
					<figcaption style="color: #E6E6E6">ADQUIERELO POR TAN SOLO 1850 PUNTOS</figcaption>
				</figure>

				
				
				<figure>
					<img src="Imagen/11.jpg" alt>
					<figcaption style="color: #E6E6E6">Adquierelo tan solo por 1350 puntos</figcaption>
				</figure>
			</figure>
		</div>
	</div>
 
			</div>


			</header>

			<div id="e63JueDestac">VideosJuegos Mas vendidos</div>
<ul id="ulNoticJue">


</ul>

			
			<div class="content">




			
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->
 
	
	
	<footer id="main-footer">
		<p>&copy; 2016 <a href="http://FranciscoAMK.com">Anderson correa.com</a></p>

	</footer> <!-- / #main-footer -->
 
	
</body>
</html>