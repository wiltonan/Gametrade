<?php
  date_default_timezone_set('America/Bogota');
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
      <div class="Categoria">
        <section>
          <h4>Registar categoria de juego.</h4>
          <form class="categoria_frm" action="../Controller/categoria.controller.php" method="post">
            <div class="row">
  						<div class="class=" col s12>

  							<div class="input-field col s5">
                  <input type="text" name="cat_nom" required/>
                  <label class="active" for="first_name2">Nombre de la categoria de juego.</label>
  							</div>

                <div class="row">
                  <div class="input-field col s5">
                    <textarea name="cat_desc" rows="5" cols="25" required></textarea>
                    <label class="active" for="first_name2">Descripcion.</label>
                  </div>
                </div>

            <input type="hidden" name="cat_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

            <button name="action" value="guardar" class="waves-effect waves-light btn">Guardar</button>
          </form>
      </section>
      </div>

      <div class="consultar_categoria_juego">
        <section>
            <a href="consultar_categoria_juego.php" class="waves-effect waves-light btn">Consultar juego.</a>
        </section>
      </div>

      <script>
  			$(document).ready(function() {
  				Materialize.updateTextFields();
  			});
  		</script>
    </body>
</html>
