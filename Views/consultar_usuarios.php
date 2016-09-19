<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $usuario = usuario::mostrarusuario();
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
    <div class="tablausuario">
      <section>
        <table border="1px">
          <thead>
            <th colspan="16">Informacion de usuarios</th>
            <tr>
              <td>Codigo</td>
              <td>Tipo de documento</td>
              <td>Documento</td>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Nick</td>
              <td>Correo</td>
              <td>Contraseña</td>
              <td>Fecha de nacimiento</td>
              <td>Telefono</td>
              <td>Celular</td>
              <td>Ciudad</td>
              <td>Dirreccion</td>
              <td>Fecha de creacion</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($usuario as $bn): ?>
                 <tr>
                   <td><?php echo $bn["usu_cod"];        ?></td>
                   <td><?php echo $bn["tipo_documento"];       ?></td>
                   <td><?php echo $bn["usu_num_docum"];  ?></td>
                   <td><?php echo $bn["usu_nom"];        ?></td>
                   <td><?php echo $bn["usu_apell"];      ?></td>
                   <td><?php echo $bn["usu_nick"];       ?></td>
                   <td><?php echo $bn["usu_mail"];       ?></td>
                   <td><?php echo $bn["usu_pass"];       ?></td>
                   <td><?php echo $bn["usu_naci"];       ?></td>
                   <td><?php echo $bn["usu_tel"];        ?></td>
                   <td><?php echo $bn["usu_cel"];        ?></td>
                   <td><?php echo $bn["ciu_nom"];        ?></td>
                   <td><?php echo $bn["usu_dir"];        ?></td>
                   <td><?php echo $bn["usu_fech"];       ?></td>
                   <td><?php echo $bn["usu_estado"];     ?></td>
                   <td>
                     <a href="modificar_usuario.php?codigo_usuario=<?php echo base64_encode($bn["usu_cod"]); ?>">Modificar</a>
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
