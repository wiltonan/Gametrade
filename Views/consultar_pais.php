<?php
 require_once("../model/conexion.php");
 require_once("../model/pais.class.php");

  $pais =Gestion_Pais::cargarpais();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tablapais">
      <section>
        <table border="1px">
          <thead>
            <th colspan="4">Paises.</th>
            <tr>
              <td>Codigo</td>
              <td>Pais</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pais as $bn): ?>
              <tr>
                <td><?php echo $bn["pais_cod"];  ?></td>
                <td><?php echo $bn["pais_nom"];  ?></td>
                <td>
                  <a href="modificar_pais.php?codigo_pais=<?php echo base64_encode($bn["pais_cod"]); ?>">Modificar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
