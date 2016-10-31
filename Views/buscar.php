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
		<ul id="ulNoticJ">
			<form>
				<input type="text" placeholder="Buscar" id="txtbuscar1" />
				
			</form>
		</ul>
		</div>

		<ul id="aa1">
			<?php
				foreach ($peliculas as $row ): ?>
				<li><img src="<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>" width="80%" height="100px" ></li>
			<?php endforeach; ?>
		</ul>
	</div>

</body>
</html>
