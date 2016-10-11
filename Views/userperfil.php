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
 <header>
    <nav>
      <ul>
        <li id="inicio"><a href="#/inicio">Inicio</a></li>
        <li id="buscar"><a href="#/buscar">Buscar</a></li>
        <li id="misjuegos"><a href="#/mis juegos">Mis juegos</a></li>
      </ul>
    </nav>
  </header>

	<section id="main-content">	
		<article>
		<div id="e63JueDesta">VideoJuegos Mas Nuevos</div>
			<header>
			<div id="dvSlider">
		<div id="captioned-gallery">
			<figure class="slider">
				<figure>
					<img src="Imagen/09.jpg" alt>
					<figcaption style="color: #E6E6E6"></figcaption>
				</figure>
				<figure>
					<img src="Imagen/08.jpg" alt>
					<figcaption style="color: #E6E6E6"> </figcaption>
				</figure>

                <figure>
					<img src="Imagen/mara.jpg" alt>
					<figcaption style="color: #E6E6E6"></figcaption>
				</figure>

				<figure>
					<img src="Imagen/10.jpg" alt>
					<figcaption style="color: #E6E6E6"></figcaption>
				</figure>				
				<figure>
					<img src="Imagen/11.jpg" alt>
					<figcaption style="color: #E6E6E6"></figcaption>
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