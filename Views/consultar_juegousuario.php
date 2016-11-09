<?php
  require_once("../Model/conexion.php");


  $juego = Gestion_Videojuego::mostrarjuego($codigoUsu);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylesSheet/todoestilo.css">
    </head>
      <body>

      <div id="e63JueDesta">MIS JUEGOS</div>

<div class="header  teal lighten-5">
    </div>
    </div>

    <?php
  foreach ($juego as $bn)
      echo " <div class='clConteJue'>
      <img class='clImageJue' src=".$bn["jue_imagen"]." width= '30%' height= '120px'/>
      <ul class='ulInforJue'>
      Nombre:
        <li>".$bn["jue_nom"]."</li>
        </br>
        Descripcion:
        <li>".$bn["jue_desc"]."</li>
        </br>

        <li>".$bn["jue_punto"]."</li>
        </br>
        Autor:
        <li>gametrade</li>
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
    
  </body>
</html>
