<?php
	require_once("../Model/conexion.php");
	require_once("../Model/consola.class.php");

  $consolamo= Gestion_Consola::consultarporCodigo($_GET["codigo_consola"]);
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Modificar consola</title>
		<script>
				$(document).ready(function() {
					Materialize.updateTextFields();
				});
		</script>
	</head>
	<body>
		<div class="formularioconsol">
			<section>
				<h4 style="margin-left:44%;">Modificar consola.</h4>
				<form style="margin-left:15%;" action="../Controller/consola.controller.php" method="post">
					<div class="row">
						<input type="hidden" name="cons_cod" readonly value="<?php echo $consolamo["cons_cod"]; ?>" />

            <div class="input-field col s6">
              <input type="text" name="cons_nom" required value="<?php echo $consolamo["cons_nom"]; ?>" />
             	<label class="active" for="first_name2">Nombre.</label>
            </div>

						<div class="input-field col s6">
            	<input type="text" name="cons_refer" required value="<?php echo $consolamo["cons_refer"]; ?>" />
            	<label class="active" for="first_name2">Referencia.</label>
           	</div>

        	</div>
					<button style="margin-left:37%;" name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
				 </form>
			</section>
		</div>
	</body>
</html>
