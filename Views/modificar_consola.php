<?php
	require_once("../Model/conexion.php");
	require_once("../Model/consola.class.php");

  $consolamo= Gestion_Consola::consultarporCodigo(base64_decode($_GET["codigo_consola"]));
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<div class="formularioconsol">
			<section>
				<h4>Modificar consola.</h4>
				<form action="../Controller/consola.controller.php" method="post">
					<div class="row">
              <div class="class=" col s12>

								<input type="hidden" name="cons_cod" readonly value="<?php echo $consolamo["cons_cod"]; ?>" />

                 <input type="hidden" name="cat_bono_fech" readonly value="<?php echo date('d/m/Y')?>"/>

                 <div class="input-field col s6">
                   <input type="text" name="cons_nom" required value="<?php echo $consolamo["cons_nom"]; ?>" />
                   <label class="active" for="first_name2">Nombre.</label>
                 </div>

								 <div class="input-field col s6">
                   <input type="text" name="cons_refer" required value="<?php echo $consolamo["cons_refer"]; ?>" />
                   <label class="active" for="first_name2">Referencia.</label>
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
