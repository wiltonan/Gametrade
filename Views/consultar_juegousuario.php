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
    <?php
  foreach ($juego as $bn)
      echo " <div class='clConteJue'>
      <img class='clImageJue' src=".$bn["jue_imagen"]." width= '30%' height= '120px'/>
      <ul class='ulInforJue'>
        <li>".$bn["jue_nom"]."</li>
        <li>".$bn["jue_desc"]."</li>
        <li>".$bn["jue_cant"]."</li>
        <li>asdasd</li>
        <li>asdsadsa</li>
      </ul>
    </div> ";
?>

    <script type="text/javascript">
      function valida3(code){
        $(".menu_admin").load("modificar_juego.php?codigo_juego="+code+"");
      }
    </script>
  </head>
  <body>
    <!-- <div class="tablajuego">
      <section>
        <table border="1px" class="highlight">
          <thead>
            <th colspan="16"><center><h5>Juegos.</h5></center></th>
            <tr>
              <td>Codigo del juego</td>
              <td>Cedula</td>
              <td>Nombre del juego</td>
              <td>Consola</td>
              <td>Categoria</td>
              <td>Fecha de publicacion</td>
              <td>Estado</td>
              <td>Operaciones</td>
            </tr>
          </thead>
          <tbody>
               <?php foreach ($juego as $bn): ?>
                 <tr>
                   <td><?php echo $bn["jue_cod"];         ?></td>
                   <td><?php echo $bn["usu_num_docum"];   ?></td>
                   <td><?php echo $bn["jue_nom"];         ?></td>
                   <td><?php echo $bn["cons_nom"];        ?></td>
                   <td><?php echo $bn["cat_nom"];         ?></td>
                   <td><?php echo $bn["jue_fech_public"]; ?></td>
                   <td><?php echo $bn["jue_estado"];      ?></td>
                   <td>
                     <span style="cursor:pointer;" onclick="valida3(<?php echo $bn["jue_cod"]; ?>)">Modificar</span>
                   </td>
                 </tr>
              <?php endforeach ?>
          </tbody>
        </table>
      </section>
    </div> -->
  </body>
</html>
