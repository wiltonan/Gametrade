<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
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
				<?php include('consultar_pais.php') ?>
			</section>
		</div>
		
	</body>
</html>
