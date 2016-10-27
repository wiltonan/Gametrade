<?php
 require_once('../model/conexion.php');
 require_once('../model/ciudad.class.php');

 $ciudad =Gestion_Ciudad::mostrarciudad();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_ciudad.php?codigo_ciudad="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablaciudad">
      <section>
        <table class="buscador">
          <thead>
            <th colspan="5"><center><h5>Ciudades.</h5></center></th>
            <tr>
              <td>Codigo</td>
              <td>Ciudad</td>
              <td>pais</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ciudad as $bn): ?>
              <tr>
                <td><?php echo $bn["ciu_cod"];  ?></td>
                <td><?php echo $bn["ciu_nom"];  ?></td>
                <td><?php echo $bn["pais_nom"]; ?></td>
                <td>
                  <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["ciu_cod"]; ?>)">Modificar</span>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
