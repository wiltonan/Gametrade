<?php
  date_default_timezone_set('America/Bogota');
 ?>

<meta charset="utf-8">
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylesSheet/gstyle_admi.css">
    <link rel="stylesheet" type="text/css" href="stylesSheet/sweetalert.css">
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script>
    $(document).ready(function() {
      Materialize.updateTextFields();
    });
  </script>
  </head>
  <body>
    <div class="formulariojuego">
      <center><h1>Registrar juego.</h1></center>
      <form action="../Controller/juego_admin.controller.php" method="post">
          <div class="row">
                 <div class="class=" col s12>

                    <div class="input-field col s5">
                        <input type="text" name="usu_cod" required>
                        <label class="active" for="first_name2">Usuario: </label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="jue_nom" required>
                        <label class="active" for="first_name2">Nombre del juego: </label>
                    </div>
                    
                    <!-- estos hay que hacerlos drop down list -->
                    <div class="input-field col s5">
                        <input type="text" name="cons_cod" required>
                        <label class="active" for="first_name2">Consola: </label>
                    </div>

                    <!-- estos hay que hacerlos drop down list -->
                    <div class="input-field col s5">
                        <input type="text" name="cat_cod" required>
                        <label class="active" for="first_name2">Categoria juego: </label>
                    </div>


                    <div class="input-field col s5">
                        <textarea name="jue_desc" rows="5" cols="25" required></textarea>
                        <label class="active" for="first_name2">Descripcion del juego: </label>
                    </div>



                    <div class="input-field col s5">
                        <input type="number" name="jue_cant" required>
                        <label class="active" for="first_name2">Cantidad de juegos: </label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="jue_trailer">
                        <label class="active" for="first_name2">Trailer del juego: </label>
                        <button type="submit" name="button" class="waves-effect waves-light btn">Agregar</button>
                    </div>

                    <input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

                    <div class="input-field col s5">
                      <input type="text" name="jue_imagen">
                      <label class="active" for="first_name2">Imagen del juego: </label>
                      <button type="submit" name="button" class="waves-effect waves-light btn">Agregar</button>
                    </div>

                    <div class="input-field col s5">
                      <input type="text" name="jue_pal_clave">
                      <label class="active" for="first_name2">Palabras claves: </label>
                    </div>

                  </div>
                </div>

        <div class="boton">
          <button name="action" value="guardarjuego" class="waves-effect waves-light btn">Aceptar</button>
        </div>

      </form>
    </div>

    <div class="consulatr_juegoa">
      <section>
        <?php include("consultar_juego.php") ?>
      </section>

    </div>
  </body>
</html>
