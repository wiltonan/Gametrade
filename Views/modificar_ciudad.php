<?php
	require_once("../Model/conexion.php");
	require_once("../Model/ciudad.class.php");

  $ciudadmo= Gestion_Ciudad::consultarporCodigo($_GET['codigo_ciudad']);
	$departamento=Gestion_Ciudad::mostrardepartamento();
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
              <label class="active" for="first_name2">Ciudad: </label>
            </div>

						<div class="input-field col s6">
		        	<select class="select" name="depar_cod" >
		          	<option value="" disabled selected>Departamento: </option>
		            	<?php foreach ($departamento as $depar) {
		              	if($depar["depar_cod"] == $ciudadmo["nombre"]){
		                $selected = "selected";
		              	}else{
		                 	$selected = "";
		                }
		                echo "<option value=".$depar["depar_cod"]." $selected>".$depar["nombre"]."</option>";
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
