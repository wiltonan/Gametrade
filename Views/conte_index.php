<html>
<head>
	<title></title>
	<meta charset="utf8"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
	<link rel="stylesheet" type="text/css" href="stylesSheet/conte_index.css"/>
</head>
<body>
<div>
	<?php include("header.php"); ?>
	<section>
		<h2>Primera Seccion</h2>
		<div class="e64ContenIndex">
			<form id="frm1" action="../Controller/subir_imagen.php" method="post" enctype="multipart/form-data">
				<label>Slider principal</label>
				<input type="file" name="sliderPrincipal"/></br>
				<button name="action" value="AgregarSlider">Agregar Imagen</button>
			</form>
		</div>

		<h2>Segunda Seccion</h2>
		<div class="e64ContenIndex">

			<form id="frm2" action="../Controller/noticiaIndex.controller.php" method="post">
				<label>video incial</label>
				<input type="type" name="VideoPrincipal"/></br>
				<button name="action" value="AgregarVide">Agregar video</button>
			</form>

			<form id="frm3" >
				<label>publicidad</label>
				<input type="file" name="video"/></br>
				<button name="action" value="AgregarVideo">Agregar Video</button>
			</form>
		</div>

		<h2>Tercera Seccion</h2>
		<div class="e64ContenIndex">
			<form id="frm4" >
				<label>Videojuegos destacados</label>
				<input type="file" name="videoJuegos"/></br>
				<button name="action" value="AgregarVideojuegos">Agregar Videojuegos</button>
			</form>
		</div>

		<h2>Cuarta Seccion</h2>
		<div class="e64ContenIndex">
			<form id="frm5" >
				<label>Noticia</label>
				<input type="file" name="Noticia"/></br>
				<button name="action" value="Agregarnoticia">Agregar noticia</button>
			</form>
			<form id="frm5" >
				<label>Publicidad</label>
				<input type="file" name="PublicidadTres"/></br>
				<button name="action" value="AgregarPublicidad">Agregar publicidad</button>
			</form>
		</div>
	</section>
</div>
</body>
</html>
