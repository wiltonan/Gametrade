<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

  $ciudadmo= Gestion_Ciudad::consultarporCodigo($_GET['codigo_ciudad']);
	$pais=Gestion_Ciudad::mostrarpais();
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script>
			$(document).ready(function() {
				Materialize.updateTextFields();
			});
		</script>
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


								 <div class="input-field col s5">
									 <select id="pais_cod" name="pais_cod" value="<?php echo $ciudadmo["depar_cod"]; ?>">
										 <option value="" disabled selected>Pais.</option>
										 <?php foreach ($pais as $pais) {
													 echo "<option value=".$pais["pais_cod"].">".$pais["pais_nom"]."</option>";
											 }?>
										</select>
									</div>

             	</div>
         		</div>
					 <button name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
				 </form>
			</section>
		</div>
	</body>
</html>
