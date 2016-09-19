<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria_bono.class.php");

$cat_bono= categoria_bono::mostrar_categoria_bono();

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
     <div class="formilario_cat_bono">
       <section>
         <h4>Registrar categoria de bono</h4>
         <form action="../Controller/categoria_bono.controller.php" method="post">
           <div class="row">
 			         <div class="class=" col s12>

                  <div class="input-field col s6">
                    <input type="text" name="cat_bono_nom">
                    <label class="active" for="first_name2">Nombre.</label>
                  </div>
              </div>
          </div>
           <!-- fecha -->
           <input type="hidden" name="cat_bono_fech" value="<?php echo date('d/m/Y')?>"/>
           <!--este es el boton-->
           <button name="action" value="guardar_cat_bono" class="waves-effect waves-light btn">Guardar</button>

         </form>
       </section>
     </div>

     <div class="consultar_categoria_bono">
        <section>
          <?php include ("consultar_categoria_bono.php") ?>
        </section>
     </div>

     <script>
         $(document).ready(function() {
           Materialize.updateTextFields();
         });
     </script>
   </body>
 </html>
