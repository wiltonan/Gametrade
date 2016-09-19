<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="formulariopunto">
			<section>
				<h1>Registrar punto.</h1>
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

							<div class="row">
								<div class="input-field col s7">
									<textarea name="pto_desc" rows="5" cols="25"></textarea>
									<label class="active" for="first_name2">Descripcion.</label>
								</div>
							</div>

					<button name="action" value="guardarpunto" class="waves-effect waves-light btn">Guardar</button>
				</form>
			</section>
		</div>

		<div class="consultar_punto">
			<section>
				<a href="consultar_puntos.php" class="waves-effect waves-light btn">Consultar puntos.</a>
			</section>
		</div>

		<script>
			$(document).ready(function() {
				Materialize.updateTextFields();
			});
		</script>
	</body>
</html>
