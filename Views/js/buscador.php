<?php
require_once("../Model/conexion.php");
require_once("../Model/juego_admi.class.php");

$peliculas = Pelicula::Buscar_peliculas($_POST["vlparam"]);

?>

<?php foreach ($peliculas as $peli): ?>
  <li><img src="../<?php echo $peli["imagen"] ?>" title="<?php echo $peli["titulo"] ?>"></li>
<?php endforeach; ?>
