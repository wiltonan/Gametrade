<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

  $ciudadmo= Gestion_Ciudad::consultarporCodigo($_GET['codigo_ciudad']);
	$pais=Gestion_Ciudad::mostrarpais();
	?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<script type="text/javascript">
			$('select').material_select();
			Materialize.updateTextFields();
		</script>
	</head>
	<body>
		<div class="formulariociudad">
			<section>
				<h4>Modificar ciudad.</h4>
				<form action="../Controller/ciudad.controller.php" method="post">
		      <input type="hidden" name="ciu_cod" readonly value="<?php echo $ciudadmo["ciu_cod"]; ?>" />
					<div class="row">
          	<div class="input-field col s6">
            	<input type="text" name="ciu_nom" required value="<?php echo $ciudadmo["ciu_nom"]; ?>" />
              <label class="active" for="first_name2">Ciudad.</label>
            </div>

						<div class="input-field col s6">
		        	<select class="select" name="pais_cod" >
		          	<option value="" disabled selected>Pais.</option>
		            	<?php foreach ($pais as $paismo) {
		              	if($paismo["pais_cod"] == $ciudadmo["pais_nom"]){
		                $selected = "selected";
		              	}else{
		                 	$selected = "";
		                }
		                echo "<option value=".$paismo["pais_cod"]." $selected>".$paismo["pais_nom"]."</option>";
		              }?>
		          </select>
		        </div>
          </div>
					 <button name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
				 </form>
			</section>
		</div>
	</body>
</html>
