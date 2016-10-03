<?php
  require_once("../Model/conexion.php");
  require_once("../Model/bono.class.php");

  $bono=bono::mostrar_bono();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tablabono">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="6"><center><h5>Informacion de bonos.</h5></center></th>
            <tr>
              <td>Codigo</td>
              <td>puntos</td>
              <td>Descripcion</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($bono as $bn): ?>
                 <tr>
                   <td><?php echo $bn["bono_cod"];    ?></td>
                   <td><?php echo $bn["pto_cant"];     ?></td>
                   <td><?php echo $bn["bono_desc"];   ?></td>
                   <td>
                     <a href="modificarbono.php?codigo_bono=<?php echo base64_encode($bn["bono_cod"]); ?>">Modificar</a>

                     <a href="../Controller/bono.controller.php?action=eliminar&codigo_bono=<?php echo base64_encode($bn["bono_cod"]); ?>">Eliminar</a>
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>

  </body>
</html>
