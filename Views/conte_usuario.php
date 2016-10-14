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



<section id="main-content" class="cl_incioo">	
		<article>
		<div id="e63JueDesta">VideoJuegos Mas Nuevos</div>

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
 
		</article> 
	</section> <!-- / #main-content -->

<div id="e63JueDestac">VideosJuegos Mas vendidos</div>




<ul id="ulNoticJuer">




</ul>
</head>
<body>	