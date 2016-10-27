<?php
 require_once("../model/conexion.php");
 require_once("../model/pais.class.php");

  $pais =Gestion_Pais::cargarpais();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_pais.php?codigo_pais="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablapais">
      <section>
        <table border="1px">
          <thead>
            <th colspan="4"><center><h5>Paises.</h5></center></th>
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
                  <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["pais_cod"]; ?>)">Modificar</span>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
