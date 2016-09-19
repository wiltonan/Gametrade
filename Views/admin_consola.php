
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="formularioconsola">
			<section>
				<h4>Registrar consola</h4>
				<form action="../Controller/consola.controller.php" method="post">
					<div class="row">
						<div class="class=" col s12>

							<div class="input-field col s5">
								<input type="text" name="cons_cod" required/> <br><br>
								<label class="active" for="first_name2">Codigo.</label>
							</div>

							<div class="row">
								<div class="input-field col s5">
									<input type="text" name="cons_nom" required/>
									<label class="active" for="first_name2">Nombre de la consola.</label>
								</div>
							</div>

							<div class="input-field col s5">
								<input type="number" name="cons_refer" required/>
								<label class="active" for="first_name2">Referencia.</label>
							</div>

							<div class="row">
								<div class="input-field col s5">
									<input type="text" name="cons_imagen"/>
									<label class="active" for="first_name2">Imagen.</label>
									<button type="button" name="button">Subir</button>
								</div>
							</div>

				<button name="action" value="guardarconsola" class="waves-effect waves-light btn">Aceptar</button>

			</section>
		</div>

		<div class="consultarconsola">
			<section>
				<a href="consultar_consola.php" class="waves-effect waves-light btn">Consultar consola.</a>
			</section>
		</div>

		<script>
			$(document).ready(function() {
				Materialize.updateTextFields();
			});
		</script>
	</body>
</html>
