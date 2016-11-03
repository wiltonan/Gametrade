<?php
	require_once('../Model/conexion.php');
  require_once('../Model/pais.class.php');

	$pais=Gestion_Pais::cargarpais ();
	?>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript">
			$('select').material_select();
		</script>
	</head>
	<body>
		<div class="formulariodepartamento">
			<section>
				<h4 style="margin-left:45%;">Registrar departamento.</h4>
				<form style="margin-left:15%;" action="../Controller/departamento.controller.php" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input type="text" name="nombre" />
							<label class="active" for="first_name2">Nombre del departamento.</label>
						</div>

						<div class="input-field col s6">
						  <select id="pais_cod" name="pais_cod">
								<option value="" disabled selected>Pais.</option>
						    <?php foreach ($pais as $pais) {
						          echo "<option value=".$pais["pais_cod"].">".$pais["pais_nom"]."</option>";
						      }?>
						  </select>
					  </div>

					</div>
					 <button style="margin-left:40%;" name="action" value="guardardepartamento" class="waves-effect waves-light btn">Registrar</button>
				 </form>
			</section>
		</div>

		<div style="margin-left:15%; margin-top:60px;" class="consultarciudad">
			<section>
				<?php include ('consultar_departamento.php') ?>
			</section>
		</div>

	</body>
</html>
