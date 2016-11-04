<?php
  require_once('../Model/conexion.php');
  require_once('../Model/bono.class.php');

  $bonomo = bono::consultarporCodigo($_GET['codigo_bono']);
  $pto_cod=bono::mostrarpunto();
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      $('select').material_select();
      Materialize.updateTextFields();
    </script>
  </head>
  <body>
    <div class="tablabono">
      <section>
        <h4 style="margin-left:45%;">Modificar bono.</h4>
        <form style="margin-left:15%;" action="../Controller/bono.controller.php" method="post">

          <div class="row">
            <input type="hidden" name="bono_cod" readonly value="<?php echo $bonomo["bono_cod"]; ?>" />

            <div class="input-field col s6">
              <select class="select" name="pto_cod" >
                <option value="" disabled selected>Cantidad de puntos</option>
                <?php foreach ($pto_cod as $puntos) {
                  if($puntos["pto_cod"] == $bonomo["pto_cod"]){
                    $selected = "selected";
                  }else{
                    $selected = "";
                  }
                  echo "<option value=".$puntos["pto_cod"]." $selected>".$puntos["pto_cant"]."</option>";
                }?>
              </select>
            </div>

            <div class="input-field col s6">
              <label>Descripción de bono:</label>
              <input type="text" name="bono_desc" required value="<?php echo $bonomo["bono_desc"]; ?>"/>
            </div>
          </div>
          <button style="margin-left:40%;" name="action" value="modificar" class="waves-effect waves-light btn">modificar</button>
        </form>
      </section>
    </div>
  </body>
</html>
