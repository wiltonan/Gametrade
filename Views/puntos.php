<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="formulariopunto">
			<section>
				<h4 style="margin-left:45%;">Registrar punto.</h4>
				<form style="margin-left:15%;" action="../Controller/puntos.controller.php" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input type="number" name="pto_cant" />
							<label class="active" for="first_name2">Cantidad de puntos.</label>
						</div>

						<div class="input-field col s6">
							<input type="number" name="pto_moneda" />
							<label class="active" for="first_name2">Valor.</label>
						</div>
					</div>
					<button style="margin-left:30%;" name="action" value="guardarpunto" class="waves-effect waves-light btn">Registrar puntos</button>
				</form>
			</section>
		</div>

		<div style="margin-left:30%; margin-top:50px; " class="consultar_punto">
			<section>
				<?php include('consultar_puntos.php') ?>
			</section>
		</div>

	</body>
</html>
