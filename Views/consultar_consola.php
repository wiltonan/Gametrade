<?php
 require_once("../model/conexion.php");
 require_once("../model/consola.class.php");

 $consola=Gestion_Consola::consulatrconsola();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_consola.php?codigo_consola="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablaconsola">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="6"><center><h5>Consolas.</h5></center></th>
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
                   <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["cons_cod"]; ?>)">Modificar</span>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
