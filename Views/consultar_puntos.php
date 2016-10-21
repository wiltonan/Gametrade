<?php
 require_once("../model/conexion.php");
 require_once("../model/puntos.class.php");

  $punto =puntos::consultarpunto();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_puntos.php?codigo_punto="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablapuntos">
      <section>
        <table border="1px">
          <thead>
            <th colspan="5"><center><h5>Puntos.</h5></center></th>
            <tr>
              <td>Codigo</td>
              <td>Cantidad</td>
              <td>Precio</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($punto as $bn): ?>
              <tr>
                <td><?php echo $bn['pto_cod'];  ?></td>
                <td><?php echo $bn['pto_cant'];  ?></td>
                <td><?php echo $bn['pto_moneda'];  ?></td>
                <td>
                   <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["pto_cod"]; ?>)">Modificar</span>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
