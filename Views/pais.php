<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="formulariopais">
			<section>
				<h4 style="margin-left:40%;">Registrar pais</h4>
				<form style="margin-left:30%;" action="../Controller/pais.controller.php" method="post">
					<div class="row">
						<div class="input-field col s8">
							<input type="text" name="pais_nom" required>
							<label class="active" for="first_name2">Nombre del pais.</label>
						</div>
					</div>
					<button style="margin-left:20%;" name="action" value="guardarpais" class="waves-effect waves-light btn">Registrar</button>
				</form>
			</section>
		</div>

		<div style="margin-left:20%; margin-top:60px;" class="consultarpais">
			<section>
				<?php include('consultar_pais.php') ?>
			</section>
		</div>

	</body>
</html>
