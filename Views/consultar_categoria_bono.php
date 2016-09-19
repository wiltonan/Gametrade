<?php
require_once("../Model/conexion.php");
require_once("../Model/Categoria_bono.class.php");

$cat_bono= categoria_bono::mostrar_categoria_bono();
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
    <!--estes es el proceso para que aparesca y se pueda mostrar-->
    <div class="tablacategoriabono">
      <section>
        <table border="1px">
          <thead>
            <th colspan="5">informacion de categoria bono</th>
            <tr>
              <td>Codigo</td>
              <td>Nombre</td>
              <td>fecha de ingreso</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($cat_bono as $cb): ?>
                <tr>
                  <td><?php echo $cb["cat_bono_cod"]; ?></td>
                  <td><?php echo $cb["cat_bono_nom"]; ?></td>
                  <td><?php echo $cb["cat_bono_fech"];?></td>
                  <td><?php echo $cb["cat_estado"];   ?></td>
                  <td>
                    <a href="modificar_categoria_bono.php?codigo_cat_bono=<?php echo base64_encode($cb["cat_bono_cod"]); ?>">Modificar</a>
                  </td>
                </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
