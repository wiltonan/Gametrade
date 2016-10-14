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
</head>
<body>


<section class="menu_usuario"></section>
	<div class="container">
		<div class="header  grey lighten-2">
		<ul id="ulNoticJ">
			<form>
				<input type="text" placeholder="Buscar" id="txtbuscar" />
				<button type="submit" class="btn">BUSCAR</button>
			</form>
		</ul>
		</div>

		<ul id="aa">
			<?php
				foreach ($peliculas as $row ): ?>
				<li><img src="img/<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>" width="80%" height="100px" ></li>
			<?php endforeach; ?>
		</ul>
	</div>

</body>
</html>
