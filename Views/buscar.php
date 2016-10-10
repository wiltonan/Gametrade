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
		<?php
		include_once("menu.php");

		?>

	<ul id="ulNoticJue">

	<form>
	<input type="text" placeholder="Buscar" id="txtbuscar" />
	</form>

	<ul class="cargarImagen"> 
		<?php
			foreach ($peliculas as $row ): ?>
			<li><img src="imagen/<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>"></li>
		<?php endforeach; ?>
	</ul>
	</ul>
</body>
</html>