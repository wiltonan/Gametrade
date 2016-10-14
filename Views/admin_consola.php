<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php
			$recibir_alerta=isset($_GET["alert"]);
			if ($recibir_alerta=="guardar"){
				echo "<script type='text/javascript'>";
				echo "alert('Guardado con exito')";
				echo "</script>";
			}
		 ?>
				
		<div class="formularioconsola">
			<section>
				<h4>Registrar consola</h4>
				<form action="../Controller/consola.controller.php" method="post">
					<div class="row">
						<div class="class=" col s12>

							<div class="row">
								<div class="input-field col s5">
									<input type="text" name="cons_nom" required/>
									<label class="active" for="first_name2">Nombre de la consola.</label>
								</div>
							</div>

							<div class="input-field col s5">
								<input type="text" name="cons_refer" required/>
								<label class="active" for="first_name2">Referencia.</label>
							</div>

				<button name="action" value="guardarconsola" class="waves-effect waves-light btn">Aceptar</button>
			</section>
		</div>

		<div class="consultarconsola">
			<section>
				<?php include('consultar_consola.php') ?>
			</section>
		</div>

	</body>
</html>
