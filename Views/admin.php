<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle_admi.css">
</head>
<body>

<div id="dvAdmin">
 <div id="dvNome">Administrador</div>

 <form action="../Controller/validarAdmi_Controller.php" method="post">
	<ul id="ulAdmin">
		<li>
			<label>Usuario</label>
			<input type="text" name="txtUsuadmi" />
		</li>
		<li>
			<label>Clave</label>
			<input type="password" name="txtClaveadmi"/>
		</li>
		<li>
			<button name="Vadmi" value="c">Aceptar</button>
		</li>
	</ul>
</form>
</div>

</body>
</html>
