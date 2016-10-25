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
  </head>
  <body>
    <div class="tablajuego">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="16"><center><h5>Juegos.</h5></center></th>
            <tr>
              <td>Usuario</td>
              <td>Nombre</td>

              <td>Codigo</td>
              <td>Cedula del usuario</td>
              <td>Nombre del juego</td>

             <!--  <td>Consola</td> -->
              <td>Referancia de la consola</td>
              <!-- <td>Categoria</td> -->
              <td>descripcion</td>
              <td>Cantidad</td>
              
              <td>imagen</td>

              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($juego as $bn): ?>
                 <tr>

                   
                <!--  <td><?php echo $bn["usu_cod"];         ?></td>  -->
                   <td><?php echo $bn["jue_nom"];        ?></td>
                   <!-- <td><?php echo $bn["cons_cod"];        ?></td>
                   <td><?php echo $bn["cat_cod"];         ?></td> -->
                   <td><?php echo $bn["jue_desc"];        ?></td>
                   <td><?php echo $bn["jue_cant"];        ?></td>
                   
                   <td><img class="juuego" src="img/<?php echo $bn["jue_imagen"];?>"/></td>
                   

                   <td><?php echo $bn["jue_cod"];         ?></td>
                   <td><?php echo $bn["usu_num_docum"];   ?></td>
                   <td><?php echo $bn["jue_nom"];         ?></td>
                   <td><?php echo $bn["cons_nom"];        ?></td>
                    <td><?php echo $bn["cons_refer"];     ?></td>
                   <td><?php echo $bn["cat_nom"];         ?></td>
                   <td><?php echo $bn["jue_desc"];        ?></td>
                   <td><?php echo $bn["jue_cant"];        ?></td>
                   <td><?php echo $bn["jue_trailer"];     ?></td>
                   <td><?php echo $bn["jue_fech_public"]; ?></td>
                   <td><?php echo $bn["jue_imagen"];      ?></td>

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
