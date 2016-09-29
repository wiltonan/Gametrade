<?php
  require_once('../Model/conexion.php');
  require_once('../Model/Categoria.class.php');

$cat_juegomo = Categoria_jue::consultarporCodigo(base64_decode($_GET['codigo_categoria']));
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tablabono">
        <section>
        <!--est es para doper modificar-->
        <h4>Modificar categoria de juego.</h4>
        <form action="../Controller/categoria.controller.php" method="post">
          <input type="hidden" name="cat_cod" readonly value="<?php echo $cat_juegomo['cat_cod']; ?>" />

          <div class="row">
              <div class="class=" col s12>

                 <div class="input-field col s6">
                   <input type="text" name="cat_nom"  required value="<?php echo $cat_juegomo['cat_nom']; ?>"/>
                   <label class="active" for="first_name2">Nombre de la categoria.</label>
                 </div>

             </div>
         </div>
          <button name="action" value="modificar" class="waves-effect waves-light btn">modificar</button>
        </form>
      </section>
    </div>

  </body>
</html>
