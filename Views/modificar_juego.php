<?php
  require_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");

  $juegomo =Gestion_Videojuego::consultarporCodigo(base64_decode($_GET["codigo_juego"]));
  date_default_timezone_set('America/Bogota');

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>modificar usuario</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
   </head>
   <body>
     <div class="usuariomodificado">
       <h4>Modificar juego</h4>
       <form  action="../Controller/juego_admin.controller.php" method="post">
         <input type="hidden" name="jue_cod" readonly value="<?php echo $juegomo["jue_cod"]; ?>" />

         <div class="row">
             <div class="class=" col s12>

                <div class="input-field col s6">
                  <input type="text" name="usu_cod" value="<?php echo $juegomo["usu_cod"]; ?>"/>
                  <label class="active" for="first_name2">Usuario.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_nom" value="<?php echo $juegomo["jue_nom"]; ?>"/>
                  <label class="active" for="first_name2">Nombre del juego.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="cons_cod" value="<?php echo $juegomo["cons_cod"]; ?>"/>
                  <label class="active" for="first_name2">Consola.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="cat_cod" value="<?php echo $juegomo["cat_cod"]; ?>"/>
                  <label class="active" for="first_name2">Categoria del juego.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_desc" value="<?php echo $juegomo["jue_desc"]; ?>"/>
                  <label class="active" for="first_name2">Descripcion del juego.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_cant" value="<?php echo $juegomo["jue_cant"]; ?>"/>
                  <label class="active" for="first_name2">Cantidad de juegos.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_trailer" value="<?php echo $juegomo["jue_trailer"]; ?>"/>
                  <label class="active" for="first_name2">Trailes.</label>
                </div>

                <input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

                <div class="input-field col s6">
                  <input type="text" name="jue_imagen" value="<?php echo $juegomo["jue_imagen"]; ?>"/>
                  <label class="active" for="first_name2">Imagen.</label>
                  <button type="submit"  name="agregarimgen" class="waves-effect waves-light btn">agregar</button>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_pal_clave" value="<?php echo $juegomo["jue_pal_clave"]; ?>"/>
                  <label class="active" for="first_name2">Palabras claves.</label>
                </div>

                <div class="input-field col s6">
                  <input type="text" name="jue_estado" value="<?php echo $juegomo["jue_estado"]; ?>"/>
                  <label class="active" for="first_name2">Estado.</label>
                </div>

             </div>
           </div>
         <button type="submit" name="action" value="modificar"class="waves-effect waves-light btn">Modificar</button>
       </form>
     </div>

     <script>
         $(document).ready(function() {
           Materialize.updateTextFields();
         });
     </script>

   </body>
 </html>
