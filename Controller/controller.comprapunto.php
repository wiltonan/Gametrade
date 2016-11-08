
<?php

session_start();
require_once("../Model/conexion.php");
require_once("../Model/compra_punto.class.php");

$documento=$_SESSION["codigo1"];

$accion=$_REQUEST["action"];
 switch ($accion) {
 	 case 'btnPunn1':
       $punto=4;
     try {
        Gestion_puntos::guardarpuntos($punto,$documento);
        echo "<script>alert('Se ha puesto en el catalogo');
        self.location.href='../Views/menu_usuario.php?#/mis juegos'
        </script>";
       } catch (Exception $e) {
        echo "errror" .$e;
       }
      break;

      case 'btnPunn2':
       $punto=5;
     try {
       Gestion_puntos::guardarpuntos($punto,$documento);
        echo "<script>alert('Se ha puesto en el catalogo');
        self.location.href='../Views/menu_usuario.php?#/mis juegos'
        </script>";
       } catch (Exception $e) {
        echo "errror" .$e;
       }
      break;

      case 'btnPunn5':
       $punto=6;
     try {
        Gestion_puntos::guardarpuntos($punto,$documento);
        echo "<script>alert('Se ha puesto en el catalogo');
        self.location.href='../Views/menu_usuario.php?#/mis juegos'
        </script>";
       } catch (Exception $e) {
        echo "errror" .$e;
       }
      break;

      case 'btnPunn10':
       $punto=7;
     try {
        Gestion_puntos::guardarpuntos($punto,$documento);
        echo "<script>alert('Se ha puesto en el catalogo');
        self.location.href='../Views/menu_usuario.php?#/mis juegos'
        </script>";
       } catch (Exception $e) {
        echo "errror" .$e;
       }
      break;
 }

?>

