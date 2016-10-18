
<?php
  require_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");
  date_default_timezone_set('America/Bogota');
  $consola = Gestion_Videojuego::mostrarconsola();
  $categoria = Gestion_Videojuego::mostrarcategoria();
 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript">
    // este es para hacer el buscador
      $(document).ready(function(){
        $("#buscar_cedula").keyup(function(){
          var param = $(this).val();
          $.post("listaajax.php", {vlparam: param}, function(data){
            $(".listado").html(data);
          });
        });
      });

      $('select').material_select();

      Materialize.updateTextFields();
    </script>
  </head>
  <body>
    <div class="formulariojuego">
      <section>
        <h4 style="margin-left:45%;">Registrar juego.</h4>
        <form style="margin-left:15%;" action="../Controller/juego_admin.controller.php" method="post">
          <div class="row">
            <div class="class=" col s12>

              <div class="input-field col s6">
                  <input id="buscar_cedula" type="text" name="usu_cod" required>
                  <label class="active" for="first_name2">Ingrese cedula de usuario: </label>
              </div>

              <div class="row">
                <div class="input-field col s6">
                    <input class="nombre" type="text" disabled>
                    <label class="active" for="first_name2"></label>
                </div>
              </div>

              <div class="input-field col s6">
                  <input type="text" name="jue_nom" required>
                  <label class="active" for="first_name2">Nombre del juego: </label>
              </div>

              <div class="row">
                <div class="input-field col s6">
                    <select class="select" name="cat_cod" required >
                      <option value="" disabled selected>Categoria juego</option>
                       <?php foreach ($categoria as $cate): ?>
                       <option value="<?php echo $cate['cat_cod'] ?>"><?php echo $cate['cat_nom']; ?></option>
                     <?php endforeach ?>
                    </select>
                </div>
              </div>

              <div class="input-field col s6">
                  <select class="select" name="cons_cod" required >
                    <option value="" disabled selected>Consola</option>
                     <?php foreach ($consola as $cons): ?>
                     <option value="<?php echo $cons['cons_cod'] ?>"><?php echo $cons['cons_nom']; ?></option>
                   <?php endforeach ?>
                  </select>
              </div>

              <div class="row">
                <div class="input-field col s6">
                    <textarea name="jue_desc" required></textarea>
                    <label for="textarea1">Descripcion del juego: </label>
                </div>
              </div>

              <div class="input-field col s6">
                  <input type="text" name="jue_trailer">
                  <label class="active" for="first_name2">Trailer del juego: </label>
                  <button type="submit" name="button" class="waves-effect waves-light btn">Agregar</button>
              </div>


              <input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

              <div class="row">
                <div class="input-field col s6">
                  <input type="text" name="jue_imagen">
                  <label class="active" for="first_name2">Imagen del juego: </label>
                  <button type="submit" name="button" class="waves-effect waves-light btn">Agregar</button>
                </div>
              </div>

              <div class="input-field col s6">
                  <input type="number" name="jue_cant" required>
                  <label class="active" for="first_name2">Cantidad de juegos: </label>
              </div>

            </div>
          </div>
          <button style="margin-left:37%;" name="action" value="guardarjuego" class="waves-effect waves-light btn">Registrar juego</button>
        </form>
      </section>
    </div>

    <div style="margin-left:10%; margin-top:80px;"  class="consulatr_juegoa">
      <section>
        <?php include("consultar_juego.php") ?>
      </section>

    </div>
  </body>
</html>
