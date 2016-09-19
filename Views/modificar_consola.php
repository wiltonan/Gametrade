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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
	</head>
	<body>
		<div class="formularioconsol">
			<section>
				<h4>Modificar consola.</h4>
				<form action="../Controller/consola.controller.php" method="post">
					<div class="row">
              <div class="class=" col s12>

                 <div class="input-field col s6">
                   <input type="text" name="cons_cod" readonly value="<?php echo $consolamo["cons_cod"]; ?>" />
                   <label class="active" for="first_name2">Codigo.</label>
                 </div>

                 <input type="hidden" name="cat_bono_fech" readonly value="<?php echo date('d/m/Y')?>"/>

                 <div class="input-field col s6">
                   <input type="text" name="cons_nom" required value="<?php echo $consolamo["cons_nom"]; ?>" />
                   <label class="active" for="first_name2">Nombre.</label>
                 </div>

								 <div class="input-field col s6">
                   <input type="number" name="cons_refer" required value="<?php echo $consolamo["cons_refer"]; ?>" />
                   <label class="active" for="first_name2">Referencia.</label>
                 </div>

                 <div class="input-field col s6">
                   <input type="text" name="cons_imagen" required value="<?php echo $consolamo["cons_imagen"]; ?>" />
                   <label class="active" for="first_name2">Imagen.</label>
                 </div>

								 <div class="input-field col s6">
                   <input type="number" name="cons_estado" required value="<?php echo $consolamo["cons_estado"]; ?>" />
                   <label class="active" for="first_name2">Estado.</label>
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
