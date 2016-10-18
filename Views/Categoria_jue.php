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
          <form style="margin-left:30%;" class="categoria_frm" action="../Controller/categoria.controller.php" method="post">
            <div class="row">
  						<div class="class=" col s12>

                <div class="row">
    							<div class="input-field col s8">
                    <input type="text" name="cat_nom" required/>
                    <label class="active" for="first_name2">Nombre de la categoria de juego.</label>
    							</div>
                </div>

                <button style="margin-left:25%;" name="action" value="guardar" class="waves-effect waves-light btn">Registrar</button>
              </div>
            </div>
          </form>
      </section>
      </div>

      <div style="margin-left:15%;"  class="consultar_categoria_juego">
        <section>
          <?php include('consultar_categoria_juego.php') ?>
        </section>
      </div>

    </body>
</html>
