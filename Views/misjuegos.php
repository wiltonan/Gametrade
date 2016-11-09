<?php
session_start();
$codigoUsu=$_SESSION['codigo1'];
  date_default_timezone_set('America/Bogota');
    include_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");
   $categorias=Gestion_Videojuego::consultarcategoria();
   $consola=Gestion_Videojuego::consultarconsola();
 ?>

<meta charset="utf-8">
<html>
  <head>
        <meta charset="utf-8">
        <title></title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize/css/materialize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="stylesSheet/todoestilo.css">
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/usuario.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){

  $('select').material_select();
      //   // $("#buscar_cedula").keyup(function(){
      //   //   var param = $(this).val();
      //   //   $.post("js/buscador.php", {vlparam: param}, function(data){
      //   //     $(".nombre").html(data);


      //   //   });
      //   // });

       });
    </script>

  
  </head>
  <body>
    <div class="formulariojuego">
    <div class="catalogo">
    <form></form>
    </div>
      <section>
        <center><h3>Registrar juego.</h3></center>
        <form action="../Controller/juego_usuario.controller.php" method="post" id="fom4" enctype="multipart/form-data">
         
            <div class="class=" col s12>
<div class="row">
              <div class="input-field col s6">
                  <input type="text" name="jue_nom" class="col s12" required>

                  <label class="active" for="first_name2" class="col s12">Nombre del juego: </label>
              </div>




            <div class="input-field col s6">
                  <!-- <input type="text" name="cat_cod" required> -->
                  <label class="active" for="first_name2">Consola: </label>
                  <select name="cons_cod" class="input-field col s12" > 
                  <option>Seleccionar</option>
                     <?php 
                      foreach ($consola as $keyconso ) {
                        echo "<option value=".$keyconso["cons_cod"].">".$keyconso["cons_nom"]."</option>";
                      }
                     ?>
                 

                   </select>
                  
              </div>

              <div class="input-field col s6">
                  <!-- <input type="text" name="cat_cod" required> -->
                  <label class="active" for="first_name2">Categoria juego: </label>
                  <select name="cat_cod" class="input-field col s12" > 
                    <option>Seleccionar</option>
                     <?php 
                      foreach ($categorias as $keycateg ) {
                        echo "<option value=".$keycateg["cat_cod"].">".$keycateg["cat_nom"]."</option>";
                      }
                     ?>

                   </select>
                  
              </div>


              <div class="input-field col s6">
                  <textarea name="jue_desc" rows="5" cols="25" required></textarea>
                  <label class="active" for="first_name2">Descripcion del juego: </label>
              </div>

              <div class="input-field col s6">
                  <input type="text" name="jue_trailer" class="col s12">
                  <label class="active" for="first_name2">Trailer del juego: </label>
                  
              </div>

              <input type="hidden" name="jue_fech_public" readonly value="<?php echo date('d/m/Y')?>"/>

              <div class="file-field input-field col s4">
                 
                 <div class="btn blue-grey">
                   <span><i class="material-icons">add_a_photo</i></span>
                   <input type="file" name="imagenJueUsu" multiple></input>
                 </div>
                 <div class="file-path-wrapper">
                   <input class="file-path validate" name="imagenJueUsu" type="text" placeholder="seleccionar una imagen">
                 </div>
               </div>

            </div>
          </div>
          <button name="action" value="guardarjuego" class="waves-effect waves-light btn light-blue darken-3">Guardar</button>
        </form>
      </section>
    </div>

    <div class="consulatr_juegoa">
      <section>
        <?php include("consultar_juegousuario.php") ?>
      </section>

    </div>
    <script type="text/javascript">
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal(); 

     </script>
  </body>

</html>