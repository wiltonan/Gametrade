<?php
  require_once('../Model/conexion.php');
  require_once('../Model/Categoria.class.php');

$cat_juegomo = Categoria_jue::consultarporCodigo($_GET['codigo_categoria']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="Categoria_jue">
      <section>
        <center><h4>Modificar categoria de juego.</h4><center>
        <form style="margin-left:30%;" action="../Controller/categoria.controller.php" method="post">
          <input type="hidden" name="cat_cod" readonly value="<?php echo $cat_juegomo['cat_cod']; ?>" />

          <div class="row">
            <div class="input-field col s8">
              <input type="text" name="cat_nom"  required value="<?php echo $cat_juegomo['cat_nom']; ?>"/>
              <label class="active" for="first_name2">Nombre de la categoria.</label>
           </div>
         </div>

          <button name="action" value="modificar" class="waves-effect waves-light btn">modificar</button>
        </form>
      </section>
    </div>

  </body>
</html>
