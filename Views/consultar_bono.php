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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="tablabono">
      <section>
        <table border="1px">
          <thead>
            <th colspan="6">Informacion de bonos</th>
            <tr>
              <td>Codigo</td>
              <td>Codigo caterogia bono</td>
              <td>Codigo punto</td>
              <td>Descripcion</td>
              <td>Cantidad</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($bono as $bn): ?>
                 <tr>
                   <td><?php echo $bn["bono_cod"];    ?></td>
                   <td><?php echo $bn["cat_bono_cod"];?></td>
                   <td><?php echo $bn["pto_cod"];     ?></td>
                   <td><?php echo $bn["bono_desc"];   ?></td>
                   <td><?php echo $bn["bono_cant"];   ?></td>
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
