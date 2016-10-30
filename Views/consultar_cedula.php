<?php
require_once("../Model/conexion.php");
require_once("../Model/pelicula.class.php");

$cedula = Gestion_Videojuego::consultarcedula($_POST["vlparam"]);

?>

<?php foreach ($cedula as $cel): ?>
  <li><img src="../<?php echo $cel["imagen"] ?>" title="<?php echo $celi["titulo"] ?>"></li>
<?php endforeach; ?>
