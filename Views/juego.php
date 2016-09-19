<?php
  date_default_timezone_set('America/Bogota');
 ?>

<meta charset="utf-8">
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="formulariojuego">
      <h1 style="text-align: center;color: #000">Juegos</h1>
      <form action="../Controller/juego_admin.controller.php" method="post">
          <div class="row">
                 <div class="class=" col s12>

                    <div class="input-field col s5">
                        <input type="text" name="usu_cod">
                        <label class="active" for="first_name2">Usuario.</label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="jue_nom">
                        <label class="active" for="first_name2">Nombre del juego.</label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="cons_cod">
                        <label class="active" for="first_name2">Consola.</label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="cat_cod">
                        <label class="active" for="first_name2">Categoria juego.</label>
                    </div>


                    <div class="input-field col s5">
                        <textarea name="jue_desc" rows="5" cols="25"></textarea>
                        <label class="active" for="first_name2">Descripcion del juego.</label>
                    </div>



                    <div class="input-field col s5">
                        <input type="number" name="jue_cant">
                        <label class="active" for="first_name2">Cantidad de juegos.</label>
                    </div>

                    <div class="input-field col s5">
                        <input type="text" name="jue_trailer">
                        <label class="active" for="first_name2">Trailer del juego.</label>
                    </div>



        <input type="hidden" name="jue_fech_public" readonly="" value="<?php echo date('d/m/Y')?>"/>

        <label>Imagen del juego: </label>
        <input type="text" name="jue_imagen">
        <br>
        <button type="submit" name="button">Agregar</button>
        <br>

        <label>Palabras claves: </label>
        <input type="text" name="jue_pal_clave">
        <br><br>

        <button name="action" value="guardarjuego" class="waves-effect waves-light btn">Aceptar</button>
      </form>
    </div>

    <div class="consulatr_juegoa">
      <section>
        <a href=consultar_juego.php class="waves-effect waves-light btn">Consultar juego.</a>
      </section>

      <script>
      $(document).ready(function() {
        Materialize.updateTextFields();
      });
    </script>

    </div>
  </body>
</html>
