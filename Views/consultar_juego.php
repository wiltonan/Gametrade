<?php
  require_once("../Model/conexion.php");
  require_once("../Model/juego_admi.class.php");

  $juego = Gestion_Videojuego::mostrarjuego();
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
    <div class="tablajuego">
      <section>
        <table border="1px">
          <thead>
            <th colspan="16">Informacion de los juegos</th>
            <tr>
              <td>Codigo</td>
              <td>Usuario</td>
              <td>Nombre</td>
              <td>Consola</td>
              <td>Categoria</td>
              <td>descripcion</td>
              <td>Cantidad</td>
              <td>trailer</td>
              <td>Fecha de publicacion</td>
              <td>imagen</td>
              <td>palabras claves</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($juego as $bn): ?>
                 <tr>
                   <td><?php echo $bn["jue_cod"];         ?></td>
                   <td><?php echo $bn["usu_cod"];         ?></td>
                   <td><?php echo $bn["jue_nom"];         ?></td>
                   <td><?php echo $bn["cons_cod"];        ?></td>
                   <td><?php echo $bn["cat_cod"];         ?></td>
                   <td><?php echo $bn["jue_desc"];        ?></td>
                   <td><?php echo $bn["jue_cant"];        ?></td>
                   <td><?php echo $bn["jue_trailer"];     ?></td>
                   <td><?php echo $bn["jue_fech_public"]; ?></td>
                   <td><?php echo $bn["jue_imagen"];      ?></td>
                   <td><?php echo $bn["jue_pal_clave"];   ?></td>
                   <td><?php echo $bn["jue_estado"];      ?></td>
                   <td>
                     <a href="modificar_juego.php?codigo_juego=<?php echo base64_encode($bn["jue_cod"]); ?>">Modificar</a>
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div>
  </body>
</html>
