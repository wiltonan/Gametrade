<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="formularioconsola">
			<section>
				<h4 style="margin-left:44%;">Registrar consola</h4>
				<form style="margin-left:15%;" action="../Controller/consola.controller.php" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input type="text" name="cons_nom" required/>
							<label class="active" for="first_name2">Nombre de la consola.</label>
						</div>

						<div class="input-field col s6">
							<input type="text" name="cons_refer" required/>
							<label class="active" for="first_name2">Referencia.</label>
						</div>
					</div>
				<button style="margin-left:37%;" name="action" value="guardarconsola" class="waves-effect waves-light btn">Registrar consola</button>
			</section>
		</div>

		<div style="margin-left:15%;" class="consultarconsola">
			<section>
				<?php include('consultar_consola.php') ?>
			</section>
		</div>

	</body>
</html>
