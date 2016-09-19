<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

  $ciudadmo= Gestion_Ciudad::consultarporCodigo(base64_decode($_GET["codigo_ciudad"]));
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
		<div class="formulariociudad">
			<section>
				<h4>Modificar ciudad.</h4>
				<form action="../Controller/ciudad.controller.php" method="post">
		      <input type="hidden" name="ciu_cod" readonly value="<?php echo $ciudadmo["ciu_cod"]; ?>" />

					<div class="row">
              <div class="class=" col s12>

                 <div class="input-field col s6">
                   <input type="text" name="ciu_nom" required value="<?php echo $ciudadmo["ciu_nom"]; ?>" />
                   <label class="active" for="first_name2">Ciudad.</label>
                 </div>

                 <input type="hidden" name="cat_bono_fech" readonly value="<?php echo date('d/m/Y')?>"/>

                 <div class="input-field col s6">
                   <input type="text" name="depar_cod" required value="<?php echo $ciudadmo["depar_cod"]; ?>" />
                   <label class="active" for="first_name2">Departamento.</label>
                 </div>

             	</div>
         		</div>
					 <button name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
				 </form>
			</section>
		</div>

		<script>
				$(document).ready(function() {
					Materialize.updateTextFields();
				});
		</script>

	</body>
</html>
