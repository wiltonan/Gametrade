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
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--contenedor del formulario-->
    <div class="formulariobono">
      <section>

        <center><h4>Registrar bono</h4></center>
      <!--aqui esta el formato y de esta de esta forma se hace -->
        <form action="../Controller/bono.controller.php" method="post">
          <div class="row">
						<div class="class=" col s12>

              <div class="input-field col s5">
                <select class="select" name="pto_cod" >
                  <option value="" disabled selected>Escoja la cantidad de puntos</option>
                    <?php foreach ($pto_cod as $puntos) {
                          echo "<option value=".$puntos["pto_cod"].">".$puntos["pto_cant"]."</option>";
                      }?>
                </select>
              </div>



               <div class="input-field col s5">
                 <input type="text" name="bono_desc" required/>
                 <label class="active" for="first_name2">Descripcion.</label>
               </div>

             </div>
           </div>
          <!--este es el boton-->
          <button name="action" value="guardarbono" class="waves-effect waves-light btn">Guardar</button>
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
