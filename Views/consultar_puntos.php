<?php
 require_once("../model/conexion.php");
 require_once("../model/puntos.class.php");

  $punto =puntos::consultarpunto();
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
    <div class="tablapuntos">
      <section>
        <table border="1px">
          <thead>
            <th colspan="5">puntos.</th>
            <tr>
              <td>Codigo</td>
              <td>Cantidad</td>
              <td>Precio</td>
              <td>Descripcion</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($punto as $bn): ?>
              <tr>
                <td><?php echo $bn["pto_cod"];  ?></td>
                <td><?php echo $bn["pto_cant"];  ?></td>
                <td><?php echo $bn["pto_moneda"];  ?></td>
                <td><?php echo $bn["pto_desc"];  ?></td>
                <td>
                  <a href="modificar_puntos.php?codigo_punto=<?php echo base64_encode($bn["pto_cod"]); ?>">Modificar</a>

                  <a href="../Controller/puntos.controller.php?action=eliminar&codigo_punto=<?php echo base64_encode($bn["pto_cod"]); ?>">Eliminar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
