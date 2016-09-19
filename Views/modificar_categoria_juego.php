<?php
  require_once("../Model/conexion.php");
  require_once("../Model/Categoria.class.php");

$cat_juegomo = Categoria_jue::consultarporCodigo(base64_decode($_GET["codigo_categoria"]));
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
    <div class="tablabono">
        <section>
        <!--est es para doper modificar-->
        <h4>Modificar categoria de juego.</h4>
        <form action="../Controller/categoria.controller.php" method="post">
          <input type="hidden" name="cat_cod" readonly value="<?php echo $cat_juegomo["cat_cod"]; ?>" />

          <div class="row">
              <div class="class=" col s12>

                 <div class="input-field col s6">
                   <input type="text" name="cat_nom"  required value="<?php echo $cat_juegomo["cat_nom"]; ?>"/>
                   <label class="active" for="first_name2">Nombre de la categoria.</label>
                 </div>

                 <div class="input-field col s6">
                   <input type="text" name="cat_desc" required value="<?php echo $cat_juegomo["cat_desc"]; ?>"/>
                   <label class="active" for="first_name2">Descripcion.</label>
                 </div>

                 <input type="hidden" name="cat_fech" readonly value="<?php echo date('d/m/Y')?>"/>

                 <div class="input-field col s6">
                   <input type="text" name="cat_estado" required value="<?php echo $cat_juegomo["cat_estado"]; ?>"/>
                   <label class="active" for="first_name2">Estado.</label>
                 </div>

             </div>
         </div>
          <button name="action" value="modificar" class="waves-effect waves-light btn">modificar</button>
        </form>
      </section>
    </div>

    <script>
        $(document).ready(function() {
          Materialize.updateTextFields();
        });
    </script>
  </body>
</html>
