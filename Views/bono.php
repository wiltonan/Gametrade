<!--este es una conexion por haci desirlo-->
<?php
require_once('../Model/conexion.php');
require_once('../Model/bono.class.php');

//este es para mostrar bono
$pto_cod=bono::mostrarpunto();
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      // $(document).ready(function(){
      //
      //   if($("#pto_cod option:selected").val() == 0) {
      //     alert("Debe Seleccionar una categoria");
      //   }
      //
      // });
      $('select').material_select();
    </script>
  </head>
  <body>
    <div class="formulariobono">
      <section>
        <h4 style="margin-left:45%;">Registrar bono</h4>
        <form style="margin-left:15%;" action="../Controller/bono.controller.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <select name="pto_cod" id="pto_cod">
                <option value="0" disabled selected>Cantidad de puntos</option>
                  <?php foreach ($pto_cod as $puntos) {
                    echo "<option value=".$puntos["pto_cod"].">".$puntos["pto_cant"]."</option>";
                  }?>
                </select>
              </div>

              <div class="input-field col s6">
                <input type="text" name="bono_desc" required/>
                <label class="active" for="first_name2">Descripcion.</label>
              </div>
            </div>
          <button style="margin-left:40%;" name="action" value="guardarbono" class="waves-effect waves-light btn">Registrar bono</button>
        </form>
      </section>
    </div>

    <div class="consultar_bono">
      <section>
        <?php include("consultar_bono.php") ?>
      </section>
    </div>

  </body>
</html>
