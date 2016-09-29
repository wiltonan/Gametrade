<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <body>
      <div class="Categoria">
        <section>
          <center><h4>Registar categoria de juego.</h4></center>
          <form class="categoria_frm" action="../Controller/categoria.controller.php" method="post">
            <div class="row">
  						<div class="class=" col s12>

  							<div class="input-field col s5">
                  <input type="text" name="cat_nom" required/>
                  <label class="active" for="first_name2">Nombre de la categoria de juego.</label>
  							</div>

            <button name="action" value="guardar" class="waves-effect waves-light btn">Guardar</button>
          </form>
      </section>
      </div>

      <div class="consultar_categoria_juego">
        <section>
          <?php include('consultar_categoria_juego.php') ?>
        </section>
      </div>

    </body>
</html>
