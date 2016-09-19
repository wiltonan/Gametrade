<?php
 require_once("../model/conexion.php");
 require_once("../model/ciudad.class.php");

 $ciudad =Gestion_Ciudad::mostrarciudad();
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
    <div class="tablaciudad">
      <section>
        <table border="1px">
          <thead>
            <th colspan="5">Informacion.</th>
            <tr>
              <td>Codigo</td>
              <td>Ciudad</td>
              <td>Departamentos</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ciudad as $bn): ?>
              <tr>
                <td><?php echo $bn["ciu_cod"];  ?></td>
                <td><?php echo $bn["ciu_nom"];  ?></td>
                <td><?php echo $bn["depar_cod"];  ?></td>
                <td>
                  <a href="modificar_ciudad.php?codigo_ciudad=<?php echo base64_encode($bn["ciu_cod"]); ?>">Modificar</a>

                  <a href="../Controller/ciudad.controller.php?action=eliminar&codigo_ciudad=<?php echo base64_encode($bn["ciu_cod"]); ?>">Eliminar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
