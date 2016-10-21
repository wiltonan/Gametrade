<?php
  include_once("../Model/conexion.php");
  include_once("../Model/juego_admi.class.php");

  $documentos = Gestion_Videojuego::Buscar_nombre($_POST["vlparam"]);
?>

<?php foreach ($documentos as $row): ?>
  <?php echo $row["usu_nom"] ?>
<?php endforeach; ?>
