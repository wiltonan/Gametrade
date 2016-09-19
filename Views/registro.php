<?php
require_once("../Model/conexion.php");
include("../Model/ciudad.class.php");

$ciudad=Gestion_Ciudad::cargarciudad();

?>


<!DOCTYPE html>
<head>
	<title>Registro</title>
		<meta charset="utf8"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
		<link rel="stylesheet" type="text/css" href="stylesSheet/registro.css"/>

		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="js/connection.js"></script>
		<script type="text/javascript" src="js/gweb.js"></script>
		<script type="text/javascript" src="js/registro.js"></script>
</head>
<body>

	<div id="dv_main">
	<?php require_once("header.php"); ?>
<div id="e64ContRegist">
	<div id="e64REusu">Registro en Senasoft</div>
	
	<h2>Formulario de registro</h2>
	<form action="../Controller/registro.controller.php" method="post">
		<ul id="ulContRegist">
			<li>
				<label for="">Tipo de documento</label>
				<select name="cbTipDocum" id="cbTipDocum">
					<option value="0">Seleccionar</option>
					<option value="1">Cedula de Ciudadania</option>
					<option value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Estranjeria</option>
				</select>
			</li>
			<li><label for="numDocument">Numero de Documento</label><input type="number" id="numDocument" name="numDocument" required/></li>
			<li><label for="">Nombre Completo</label><input type="text" id="nameRegist"  name="nameRegist" required/></li>
			<li><label for="">Apellido Completo</label><input type="text" id="lastRegist"  name="lastRegist" required/></li>
			<li><label for="">centro</label><input type="text" id="lastRegist"  name="lastRegist" required/></li>
			<li><label for="">Telefono</label><input type="number" id="phoneRegist"  name="phoneRegist"/></li>
			<li><label for="">Celular</label><input type="number"  id="CelphoneRegist" name="CelphoneRegist"/></li>
			<li><label for="">Direccion</label><input type="text" id="addressRegist"  name="addressRegist" required/></li>
			<li><label for="">Ciudad</label>
				<select  id="cbCiudad" name="cbCiudad">
					<?php
							echo "<option value='0'>Seleccionar</option>";
						foreach ($ciudad as $ciu ) {
							echo "<option value=".$ciu["ciu_cod"].">".$ciu["ciu_nom"]."</option>";
						}

					?>
				</select>
			</li>

			<li><div id="enviarR" onclick="enviar()">Registrarme</div></li>
		</ul>
	</form>
</div>
</div>
</body>
</html>
