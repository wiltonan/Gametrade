<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="formulariopais">
			<section>
				<h4>Registrar pais</h4>
				<form action="../Controller/pais.controller.php" method="post">
					<div class="row">
						<div class="class=" col s12>

							<div class="input-field col s5">
								<input type="text" name="pais_nom" required>
								<label class="active" for="first_name2">Nombre del pais.</label>
							</div>

						</div>
					</div>
					<button name="action" value="guardarpais" class="waves-effect waves-light btn">Aceptar</button>
				</form>
			</section>
		</div>

		<div class="consultarpais">
			<section>
				<a href="consultar_pais.php" class="waves-effect waves-light btn">Cunsultar paises.</a>
			</section>
		</div>

		<script>
			$(document).ready(function() {
				Materialize.updateTextFields();
			});
		</script>
	</body>
</html>
