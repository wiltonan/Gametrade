<?php
  require_once("../Model/conexion.php");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tabla_usu_pun">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="16"><center><h5>pendientes.</h5></center></th>
            <tr>
              <td>codigo de usuario</td>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($juego as $bn): ?>
              <td><?php echo $bn["jue_estado"]; ?></td>
            <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
