<?php
  date_default_timezone_set('America/Bogota');
  include_once("../Model/conexion.php");
  include_once("../Model/juego_usuario.class.php");
   $compra=Gestion_Videojuego::comprajuego();
 ?>

<!DOCTYPE html>
<html>
<head>
      <title></title>

      <link rel="stylesheet" href="stylesSheet/todoestilo.css">
  
   <!--  <link rel="stylesheet" href="stylesSheet/comprajuego.css"> -->
</head>
<body>

<section id="srComprs">
  <ul class="ulCompr">
      <?php
        foreach ($compra as $compr ) {
          echo "<li><img   src=".$compr["jue_imagen"]." /><a id='boto'href='comprar.php?cmp=".$compr["jue_cod"]."'>Adquirir juego</a></li>";
  
        }
?>

  </ul> 
</section>

</body>
</html>
