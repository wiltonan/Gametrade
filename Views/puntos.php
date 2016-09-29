<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="stylesSheet/gstyle_admi.css">
		<script src="js/sweetalert.min.js"></script>
	</head>
	<body>
		<div class="formulariopunto">
			<section>
				<center><h4>Registrar punto.</h4></center>
				<form action="../Controller/puntos.controller.php" method="post">
					<div class="row">
						<div class="class=" col s12>

							<div class="input-field col s5">
								<input type="text" name="pto_cant" />
								<label class="active" for="first_name2">Cantidad de puntos.</label>
							</div>

							<div class="row">
								<div class="input-field col s5">
									<input type="number" name="pto_moneda" />
									<label class="active" for="first_name2">Valor.</label>
								</div>
							</div>

					<button name="action" value="guardarpunto" class="waves-effect waves-light btn">Guardar</button>
				</form>
			</section>
		</div>

		<div class="consultar_punto">
			<section>
				<?php include('consultar_puntos.php') ?>
			</section>
		</div>

	</body>
</html>
