<?php
include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");



$peliculas=Paginacion_Buscar::consultarlike($_POST["vlparam"]);

?>

<?php foreach ($peliculas as $row ): ?>
	<li><img src="images/<?php echo $row["imagen"]?>" title="<?php echo $row["titulo"]?>"></li>
<?php endforeach; ?>


<!DOCTYPE html>
<html>

<style type="text/css">
	
	ul li img{
		width: 250px;
		height: 250px;
	}

	ul li{
		display: inline-block;
		margin-left: 40px;
	}

input[type=text]{
	border: none;
	background: #f00;
	color: #fff;
	width: 80%;
	padding: 15px;
}

form{
	width: 100%;
	position: relative;
	background:#00f;
	padding: 20px 0;
	text-align: center;
	margin-bottom: 20px;
}

</style>

<head>
	<title>
		
	</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

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

<form>
<input type="text" placeholder="Buscar" id="txtbuscar" />
</form>

<ul class="cargarImagen"> 
	<?php
		foreach ($pelicula as $row ): ?>
		<li><img src="images/<?php echo $row["imagen"]?>" title="<?php echo $row["titulo"]?>"></li>
	<?php endforeach; ?>
</ul>






</body>
</html>