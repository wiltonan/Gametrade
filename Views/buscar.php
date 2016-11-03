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


		$("#txtbuscar1").keyup(function(){
		
			var paramet= $(this).val();
			$.post("listadoajax1.php",{vlparam1: paramet}, function(data){
				
				$("#aa1").html(data)
			});
		});

</script>
</style>
</head>
<body>


<section class="menu_usuario"></section>
	<div class="container">
		<div class="header  grey lighten-2">
		<ul id="ulNoticJu">
			<form>
				<input type="text" placeholder="Buscar" id="txtbuscar1" />
				
			</form>
		</ul>
		</div>

		<ul id="aa1">
			<?php
				foreach ($peliculas as $row )
				echo "<li><img src=".$row["jue_imagen"]." title=".$row["jue_nom"]." width='100%' height='250px' ><div><a id='bot' href='registrarjuego.php?adqui=".$row["jue_cod"]."'>tengo juego</a></div></li>";
			?>
		</ul>
	</div>

</body>
</html>
