<?php
  require_once("../Model/conexion.php");
  require_once("../Model/departamento.class.php");
  $departamento_mo=Gestion_departamento::consultarcodigo($_GET["codigo_departamento"]);
  $pais=Gestion_departamento::mostrarpais();
 ?>
 <!DOCTYPE html>
 <html>
 	<head>
    <meta charset="utf-8">
 		<title></title>
 		<script type="text/javascript">
 			$('select').material_select();
 			Materialize.updateTextFields();
 		</script>
 	</head>
 	<body>
 		<div class="formularidepartamento">
 			<section>
 				<h4>Modificar departamento.</h4>
 				<form action="../Controller/departamento.controller.php" method="post">
 		      <input type="hidden" name="depar_cod" readonly value="<?php echo $departamento_mo["depar_cod"]; ?>" />
 					<div class="row">
           	<div class="input-field col s6">
             	<input type="text" name="nombre" required value="<?php echo $departamento_mo["nombre"]; ?>" />
               <label class="active" for="first_name2">Departamento.</label>
             </div>

 						<div class="input-field col s6">
 		        	<select class="select" name="pais_cod" >
 		          	<option value="" disabled selected>Pais: </option>
 		            	<?php foreach ($pais as $paismo) {
 		              	if($paismo["pais_cod"] == $departamento_mo["pais_nom"]){
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
