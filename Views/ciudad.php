<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

	$departamento=Gestion_Ciudad::mostrardepartamento();
	?>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>

		<div class="formulariociudad">
			<section>
				<h4>Registrar ciudad.</h4>
				<form action="../Controller/ciudad.controller.php" method="post">
					<div class="row">
            <div class="class=" col s12>

							<div class="input-field col s5">
								<input type="text" name="ciu_nom" />
								<label class="active" for="first_name2">Nombre de la Ciudad.</label>
							</div>

							<div class="input-field col s5">
						    <select id="depar_cod" name="depar_cod" required>
									<option value="" disabled selected>Departamento.</option>
						      <?php foreach ($departamento as $depar) {
						            echo "<option value=".$depar["depar_cod"].">".$depar["depar_nom"]."</option>";
						        }?>
						     </select>
							 </div>

					 		</div>
						</div>
					 <button name="action" value="guardarciudad" class="waves-effect waves-light btn">Enviar</button>
				 </form>
			</section>
		</div>

		<div class="consultarciudad">
			<a href="consultar_ciudad.php" class="waves-effect waves-light btn">Consultar ciudad</a>
		</div>

		<script>
       $(document).ready(function () {
           $('select').material_select();
       });

       $(document).ready(function() {
         Materialize.updateTextFields();
       });
  </script>

	</body>
</html>
