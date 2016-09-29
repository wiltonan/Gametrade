<?php
  require_once('../Model/conexion.php');
  require_once('../Model/bono.class.php');

$bonomo = bono::consultarporCodigo(base64_decode($_GET['codigo_bono']));
$pto_cod=bono::mostrarpunto();
?>

    <meta charset="utf-8">
        <div class="tablabono">
          <section>
          <!--est es para doper modificar-->
          <h1>Modificar bono.</h1>
          <form action="../Controller/bono.controller.php" method="post">
            <input type="hidden" name="bono_cod" readonly value="<?php echo $bonomo["bono_cod"]; ?>" />


            <div class="input-field col s5">
              <select class="select" name="pto_cod" value="<?php echo $bonomo["pto_cod"]; ?>" >
                <option value="" disabled selected>Escoja la cantidad de puntos</option>
                  <?php foreach ($pto_cod as $puntos) {
                        echo "<option value=".$puntos["pto_cod"].">".$puntos["pto_cant"]."</option>";
                    }?>
              </select>
            </div>

            <label>Descripción de bono:</label>
            <input type="text" name="bono_desc" required value="<?php echo $bonomo["bono_desc"]; ?>"/>
            </br>
            </br>

            <button name="action" value="modificar" class="waves-effect waves-light btn">modificar</button>
          </form>

        </section>
      </div>
