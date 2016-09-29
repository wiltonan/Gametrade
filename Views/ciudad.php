<?php
	require_once('../Model/conexion.php');
	require_once('../Model/ciudad.class.php');

	$pais=Gestion_Ciudad::mostrarpais();
	?>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
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
						    <select id="pais_cod" name="pais_cod">
									<option value="" disabled selected>Pais.</option>
						      <?php foreach ($pais as $pais) {
						            echo "<option value=".$pais["pais_cod"].">".$pais["pais_nom"]."</option>";
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
			<section>
				<?php include ('consultar_ciudad.php') ?>
			</section>
		</div>

	</body>
</html>
