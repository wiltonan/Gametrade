<?php
	include_once("../Model/conexion.php");
	include_once("../Model/paginacion_class.php");
	$peliculas=Paginacion_Buscar::consultarlike($_POST["vlparam"]);
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
				$(".cargarImagen").html(data)
			});
		});
	})
</script>
</style>
</head>
<body>
<header>
    <nav>
      <ul>
        <li id="inicio"><a href="#/inicio">Inicio</a></li>
        <li id="buscar"><a href="buscar.php">Buscar</a></li>
        <li id="misjuegos"><a href="#/mis juegos">Mis juegos</a></li>
      </ul>
    </nav>
  </header>
<section class="menu_usuario"></section>
	<ul id="ulNoticJue">
		<form>
			<input type="text" placeholder="Buscar" id="txtbuscar" />
		</form>
	</ul>

	<ul class="cargarImagen">
		<?php
			foreach ($peliculas as $row ): ?>
			<li><img src="imagen/<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>"></li>
		<?php endforeach; ?>
	</ul>

</body>
</html>
