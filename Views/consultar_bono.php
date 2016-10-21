<?php
  require_once("../Model/conexion.php");
  require_once("../Model/bono.class.php");

  $bono=bono::mostrar_bono();
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificarbono.php?codigo_bono="+code+"");
      }
    </script>
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
                     <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["bono_cod"]; ?>)">Modificar</span>
                     <!-- haci se hace ek eliminar -->
                     <!-- <a href="../Controller/bono.controller.php?action=eliminar&codigo_bono=<?php echo $bn["bono_cod"]; ?>">Eliminar</a> -->
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>

  </body>
</html>
