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
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="stylesSheet/todoestilo.css">
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