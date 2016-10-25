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
  


  </body>
</html>
