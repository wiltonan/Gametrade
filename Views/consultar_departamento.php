<?php
 require_once('../Model/conexion.php');
 require_once('../Model/departamento.class.php');

 $departamento =Gestion_departamento::mostrardepartamento();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_departamento.php?codigo_departamento="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablaciudad">
      <section>
        <table  border="1px" class="buscador" class="highlight">
          <thead>
            <th colspan="5"><center><h5>Informacion de los Departamentos.</h5></center></th>
            <tr>
              <td>Codigo</td>
              <td>Departamento</td>
              <td>Pais</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($departamento as $bn): ?>
              <tr>
                <td><?php echo $bn["depar_cod"];  ?></td>
                <td><?php echo $bn["nombre"];  ?></td>
                <td><?php echo $bn["pais_nom"];  ?></td>
                <td>
                  <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["depar_cod"]; ?>)">Modificar</span>
                </td>
              </tr>
           <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
