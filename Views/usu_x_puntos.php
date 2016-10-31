<?php
  require_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");
  require_once("../Model/puntos.class.php");

  $punto=puntos::consultarpunto();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#busqueda").keyup(function(){
          var param = $(this).val();
          $.post("buscador_nombre.php", {vlparam: param}, function(data){
            $("#editjv").val(data);
          });
        });
      });

      $('select').material_select();
      Materialize.updateTextFields();
    </script>
  </head>
  <body>
    <div class="usupuntos">
      <section>
        <form class="" action="../Controller/usu_punto.controller.php" method="post">
          <h3>Registrarle puntos a un usuario</h3>
          <div class="row">
            <div class="input-field col s6">
                <input id="busqueda" type="text" name="usu_cod" maxlength="20" autocomplete="off" required>
                <label class="active" for="first_name2">Ingrese cedula de usuario: </label>
            </div>

            <div class="input-field col s6">
                <input id="editjv" class="nombre" type="text">
                <label class="active" for="first_name2"></label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
                <select class="select" name="pto_cod" required >
                  <option value="" disabled selected>puntos: </option>
                   <?php foreach ($punto as $pun): ?>
                   <option value="<?php echo $pun['pto_cod'] ?>"><?php echo $pun['pto_cant']; ?></option>
                 <?php endforeach ?>
                </select>
            </div>
          </div>
          <button style="margin-left:40%;" name="action" value="guardar" class="waves-effect waves-light btn">Asignar puntos</button>
        </form>
      </section>
    </div>
  </body>
</html>
