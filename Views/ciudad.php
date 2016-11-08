<?php
	require_once('../Model/conexion.php');
	require_once('../Model/ciudad.class.php');
	require_once('../Model/departamento.class.php');
	$departamento=Gestion_Ciudad::mostrardepartamento();
	?>

<html>
	<head>
		<title></title>
		<script type="text/javascript">
			$('select').material_select();
		</script>
	</head>
	<body>

		<div class="formulariociudad">
			<section>
				<h4 style="margin-left:45%;">Registrar ciudad.</h4>
				<form style="margin-left:15%;" action="../Controller/ciudad.controller.php" method="post">
					<div class="row">
            <div class="class=" col s12>

							<div class="input-field col s6">
								<input type="text" name="ciu_nom" />
								<label class="active" for="first_name2">Nombre de la Ciudad.</label>
							</div>

							<div class="input-field col s6">
						    <select id="pais_cod" name="depar_cod">
									<option value="" disabled selected>departamento: </option>
						      <?php foreach ($departamento as $depar) {
						            echo "<option value=".$depar["depar_cod"].">".$depar["nombre"]."</option>";
						        }?>
						     </select>
							 </div>

					 		</div>
						</div>
					 <button style="margin-left:40%;" name="action" value="guardarciudad" class="waves-effect waves-light btn">Registrar</button>
				 </form>
			</section>
		</div>

		<div style="margin-left:15%; margin-top:60px;" class="consultarciudad">
			<section>
				<?php include ('consultar_ciudad.php') ?>
			</section>
		</div>

	</body>
</html>
