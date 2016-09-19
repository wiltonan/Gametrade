<?php
	require_once("../model/conexion.php");
	require_once("../model/departamento.class.php");

	$pais = Gestion_Departamento::cargarpais();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="formulariodepartamento">
			<section>
				<h4>Registrar departamento</h4>
				<form action="../Controller/departamento.controller.php" method="post">
					<div class="row">
						<div class="class=" col s12>

							<div class="input-field col s5">
								<input type="text" name="depar_nom"/>
								<label class="active" for="first_name2">Nombre del departamento.</label>
							</div>

							<div class="input-field col s5">
								<select id="pais_cod" name="pais_cod">
									<option value="" disabled selected>Pais.</option>
									<?php foreach ($pais as $pai ) {
											echo "<option value=".$pai["pais_cod"].">".$pai["pais_nom"]."</option>";
										}
									?>
								</select>
							</div>

					</div>
				</div>

				<button name="action" value="guardardepartamento" class="waves-effect waves-light btn">Aceptar</button>
				</form>
			</section>
		</div>

		<div class="consultardepartamento">
			<section>
				<a href="consultar_departamento.php" class="waves-effect waves-light btn">Cunsulatar departamentos.</a>
			</section>
		</div>

		<script>
			$(document).ready(function() {
				Materialize.updateTextFields();
			});
		</script>

	</body>
</html>
