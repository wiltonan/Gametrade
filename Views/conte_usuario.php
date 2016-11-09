<?php
	include_once("../Model/conexion.php");
	include_once("../Model/paginacion_class.php");
	$peliculas=Paginacion_Buscar::consultarjue();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/mindex.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/Slider.css"/>
     <link rel="stylesheet" href="materialize/css/materialize.css">
     <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
     <script type="text/javascript" src="js/usuario.js"></script>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="stylesSheet/todoestilo.css">
	<script type="text/javascript" src="js/connection.js"></script>
	<script type="text/javascript">

	$(document).ready(function(){
		$("#txtbuscar").keyup(function(){
			var paramet= $(this).val();
			$.post("listadoajax.php",{vlparam: paramet}, function(data){
				$("#aa").html(data)
			});
		});
	})
</script>
</style>


<section>
		<div id="captioned-gallery">
			<figure class="slider">

				<figure>
					<img src="Imagen/09.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Imagen/08.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

		    <figure>
					<img src="Imagen/mara.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Imagen/10.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Imagen/05.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

			</figure>
		</div>
	</section>


<div id="e63JueDestac">ADQUIERE NUEVOS VIDEOJUEGOS</div>

<div class="header  teal lighten-5">
		<ul id="ulNoticJ">
			<form>
				<input type="text" placeholder="Buscar" id="txtbuscar" />
			
			</form>
		</ul>
		</div>

		<ul id="aa">
			<?php
				foreach ($peliculas as $row )
				echo "<li><img src=".$row["jue_imagen"]." title=".$row["jue_nom"]." width='100%' height='600px' ><div><a id='bo'  href='registrarjuego.php?adqui=".$row["jue_cod"]."'>tengo este juego</a></div></li>";
			?>
		</ul>
	</div>


</head>
<body>	