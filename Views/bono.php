<!--este es una conexion por haci desirlo-->
<?php
require_once("../Model/conexion.php");
require_once("../Model/bono.class.php");

//este es para mostrar bono
$cat_bono_cod=bono::mostrarCategoriabono();
$pto_cod=bono::mostrarpunto();
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
    <!--contenedor del formulario-->
    <div class="formulariobono">
      <section>

        <h1>Registrar bono</h1>
      <!--aqui esta el formato y de esta de esta forma se hace -->
        <form action="../Controller/bono.controller.php" method="post">
          <div class="row">
						<div class="class=" col s12>

							<div class="input-field col s5">
                <select id="cat_bono_cod" name="cat_bono_cod" required>
                  <option value="" disabled selected>Categoria de bono</option>
                  <?php foreach ($cat_bono_cod as $categoria) {
                        echo "<option value=".$categoria["cat_bono_cod"].">".$categoria["cat_bono_nom"]."</option>";
                    }?>
                 </select>
              </div>

              <div class="row">
                <div class="input-field col s5">
                  <select id="pto_cod" name="pto_cod" required>
                    <option value="" disabled selected>Puntos</option>
                    <?php foreach ($pto_cod as $puntos) {
                          echo "<option value=".$puntos["pto_cod"].">".$puntos["pto_moneda"]."</option>";
                      }?>
                   </select>
                 </div>
               </div>

               <div class="input-field col s5">
                 <input type="text" name="bono_desc" required/>
                 <label class="active" for="first_name2">Descripcion.</label>
               </div>

               <div class="row">
                 <div class="input-field col s5">
                   <input type="text" name="bono_cant" required/>
                   <label class="active" for="first_name2">cantidad de bonos.</label>
                 </div>
               </div>

             </div>
           </div>
          <!--este es el boton-->
          <button name="action" value="guardarbono" class="waves-effect waves-light btn">Guardar</button>

        </form>
      </section>
    </div>

    <div class="consultar_bono">
      <section>
        <a href="consultar_bono.php" class="waves-effect waves-light btn">consultar bono.</a>
      </section>
    </div>

    <script>
      $(document).ready(function() {
        Materialize.updateTextFields();
      });
    </script>
  </body>
</html>
