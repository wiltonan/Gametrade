<?php
 require_once("../model/conexion.php");
 require_once("../model/departamento.class.php");

 $departamento =Gestion_Departamento::consultardepartamento();
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
    <div class="tabladepartamento">
      <section>
        <table border="1px">
          <thead>
            <th colspan="5">Departamento.</th>
            <tr>
              <td>Codigo</td>
              <td>Departamento</td>
              <td>Pais</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($departamento as $bn): ?>
              <tr>
                <td><?php echo $bn["depar_cod"];  ?></td>
                <td><?php echo $bn["depar_nom"];  ?></td>
                <td><?php echo $bn["pais_cod"];   ?></td>
                <td><?php echo $bn["estado"];     ?></td>
                <td>
                  <a href="modificar_departamento.php?codigo_departamento=<?php echo base64_encode($bn["depar_cod"]); ?>">Modificar</a>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
