<?php
 require_once("../model/conexion.php");
 require_once("../model/consola.class.php");

 $consola=Gestion_Consola::consulatrconsola();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tablaconsola">
      <section>
        <table border="1px">
          <thead>
            <th colspan="6">consolas.</th>
            <tr>
              <td>Codigo</td>
              <td>Nombre</td>
              <td>Referencia</td>
              <td>Operacio</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($consola as $bn): ?>
              <tr>
                <td><?php echo $bn["cons_cod"];  ?></td>
                <td><?php echo $bn["cons_nom"];  ?></td>
                <td><?php echo $bn["cons_refer"];?></td>
                <td>
                  <a href="modificar_consola.php?codigo_consola=<?php echo base64_encode($bn["cons_cod"]); ?>">Modificar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
