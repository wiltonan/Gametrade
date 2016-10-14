<?php
  date_default_timezone_set('America/Bogota');
 ?>

<meta charset="utf-8">
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylesSheet/todoestilo.css">
 <link rel="stylesheet" href="materialize/css/materialize.css">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/usuario.js"></script>

 

    <script>
      $(document).ready(function(){

        $("#buscar_cedula").keyup(function(){
          var param = $(this).val();
          $.post("js/buscador.php", {vlparam: param}, function(data){
            $(".nombre").html(data);


          });
        });
      });
    </script>

  
  </head>
  <body>

  
  
    <div class="formulariojuego">

    <div class="catalogo">
    <form></form>
      

    </div>

      <section>
   

   

  <!-- Modal Structure -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

        <center><h3>Registrar juego.</h3></center>
        <form action="../Controller/juego_admin.controller.php" method="post" id="fom4">
          <div class="row">
            <div class="class=" col s12>

              <div class="input-field col s6">
                  <input type="text" name="jue_nom" required>
                  <label class="active" for="first_name2">Nombre del juego: </label>
              </div>

              <!-- estos hay que hacerlos drop down list -->
              <div class="input-field col s6">
                  <input type="text" name="cons_cod" required>
                  <label class="active" for="first_name2">Consola: </label>
              </div>

              <!-- estos hay que hacerlos drop down list -->
              <div class="input-field col s6">
                  <input type="text" name="cat_cod" required>
                  <label class="active" for="first_name2">Categoria juego: </label>
              </div>


              <div class="input-field col s6">
                  <textarea name="jue_desc" rows="5" cols="25" required></textarea>
                  <label class="active" for="first_name2">Descripcion del juego: </label>
              </div>



              <div class="input-field col s6">
                  <input type="number" name="jue_cant" required>
                  <label class="active" for="first_name2">Cantidad de juegos: </label>
              </div>

              <div class="input-field col s6">
                  <input type="text" name="jue_trailer">
                  <label class="active" for="first_name2">Trailer del juego: </label>
                  
              </div>

              <input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

              <div class="input-field col s6">
                <input type="text" name="jue_imagen">
                <label class="active" for="first_name2">Imagen del juego: </label>
                <input type="file"></input>
              </div>

              <div class="input-field col s6">
                <input type="text" name="jue_pal_clave">
                <label class="active" for="first_name2">Palabras claves: </label>
              </div>

            </div>
          </div>
          <button name="action" value="guardarjuego" class="waves-effect waves-light btn">Guardar</button>
        </form>
      </section>
    </div>

    <div class="consulatr_juegoa">
      <section>
        <?php include("consultar_juego.php") ?>
      </section>

    </div>
    <script type="text/javascript">
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal(); 

     </script>
  </body>

</html>