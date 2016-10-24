<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $usuario = usuario::mostrarusuario();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_usuario.php?codigo_usuario="+code+"");
      }
    </script>
  </head>
  <body>
    <div class="tablausuario">
      <section>
        <table border="1px">
          <thead>
            <th colspan="16"><center><h5>Usuario.</h5></center></th>

            <tr>
              <td>Rol</td>
              <td>Tipo de documento</td>
              <td>Documento</td>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Nick</td>
              <td>Correo</td>
              <td>Ciudad</td>
              <td>Fecha de creacion</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($usuario as $bn): ?>
                 <tr>
                   <td><?php echo $bn['nombre']; ?></td>
                   <td><?php echo $bn['tipo_documento']; ?></td>
                   <td><?php echo $bn['usu_num_docum'];  ?></td>
                   <td><?php echo $bn['usu_nom'];        ?></td>
                   <td><?php echo $bn['usu_apell'];      ?></td>
                   <td><?php echo $bn['usu_nick'];       ?></td>
                   <td><?php echo $bn['usu_mail'];       ?></td>
                   <td><?php echo $bn['ciu_nom'];        ?></td>
                   <td><?php echo $bn['usu_fech'];       ?></td>
                   <td><?php echo $bn['usu_estado'];     ?></td>
                   <td>
                      <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["usu_cod"]; ?>)">Modificar</span>
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
