<!DOCTYPE html>
<head>
	<title>GAMETRADE</title>
	<meta charset="utf8"/>
	<link rel="stylesheet" type="text/css" href="Views/stylesSheet/mindex.css"/>
	<link rel="stylesheet" type="text/css" href="Views/stylesSheet/Slider.css"/>
	<script type="text/javascript" src="Views/js/connection.js"></script>
	<script type="text/javascript" src="Views/js/mindexC.js"></script>
</head>
<body>
	<section>
		<div id="captioned-gallery">
			<figure class="slider">
				<figure>
					<img src="Views/Imagen/04.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Views/Imagen/03.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

		    <figure>
					<img src="Views/Imagen/mar.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Views/Imagen/05.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

				<figure>
					<img src="Views/Imagen/04S.jpg" style="height: 535px; width: 100%;">
					<figcaption>Nombre de la pelicula</figcaption>
				</figure>

			</figure>
		</div>
	</section>

	<div class="contenido_lugar_video">
		<section>
			<div class="row">
				<div class="col s8">
					<div id="e64Video" >
						<video src="http://v2v.cc/~j/theora_testsuite/320x240.ogg" controls>Tu navegador no implementa el elemento <code>video</code>.
						</video>
					</div>
				</div>

				<div class="col s4" width="100%">
					<div id="e64Public1">
						<img src="Views/Imagen/diseno/1.png"  height="198px;"/>
					</div>

					<div id="e64Public2" style="margin-top: 2px">
						<img src="Views/Imagen/diseno/2.png" height="198px;" />
					</div>
				</div>
			</div>
		</section>
	</div>

	<section>
		<div class="col s12">
		<div class="jue_destacado">
			<h3>Juegos más destacados</h3>
		</div>
		<div class="lista_de_juego">
			<ul id="ulNoticJue">
				<li id="juego">
					<img src="Views/Imagen/diseno/8.png"/>
				</li>
				<li id="juegos">
					<img src="Views/Imagen/diseno/9.png"/>
				</li>
				<li id="jueg">
					<img src="Views/Imagen/diseno/4.png"/>
				</li>
				<li id="jue">
					<img src="Views/Imagen/diseno/10.png"/>
				</li>
				<li id="ju">
					<img src="Views/Imagen/diseno/11.png"/>
				</li>
				<li id="videos">
					<img src="Views/Imagen/diseno/12.png"/>
				</li>
				<li id="video">
					<img src="Views/Imagen/diseno/13.png"/>
				</li>
				<li id="vide">
					<img src="Views/Imagen/diseno/14.png"/>
				</li>
				<li id="vid">
					<img src="Views/Imagen/diseno/15.png"/>
				</li>
				<li id="vi">
					<img src="Views/Imagen/diseno/16.png"/>
				</li>
			</ul>
		</div>
		</div>
	</div>
	</section>



	<section>
		<?php require_once("Views/footer.php"); ?>
	</section>

</body>
</html>
