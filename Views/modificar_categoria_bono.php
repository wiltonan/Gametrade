<?php
  require_once("../Model/conexion.php");
  require_once("../Model/Categoria_bono.class.php");

  $cat_bono_mo=categoria_bono::consultarporCodigo(base64_decode($_GET["codigo_cat_bono"]));
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
    <div class="cat_bono_mo">
      <section>
        <h4>Modificar categoria bono</h4>
        <form action="../Controller/categoria_bono.controller.php" method="post">
          <input type="hidden" name="cat_bono_cod" readonly value="<?php echo $cat_bono_mo["cat_bono_cod"]; ?>"/>

          <div class="row">
              <div class="class=" col s12>

                 <div class="input-field col s6">
                   <input type="text" name="cat_bono_nom" required value="<?php echo $cat_bono_mo["cat_bono_nom"]; ?>">
                   <label class="active" for="first_name2">Nombre.</label>
                 </div>

                 <input type="hidden" name="cat_bono_fech" readonly value="<?php echo date('d/m/Y')?>"/>

                 <div class="input-field col s6">
                   <input type="text" name="cat_estado" required value="<?php echo $cat_bono_mo["cat_estado"]; ?>">
                   <label class="active" for="first_name2">Estado.</label>
                 </div>

             </div>
         </div>
          <button  name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
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
