<?php
include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");



$pelic=Paginacion_Buscar::consultarlike($_POST["vlparam"]);
// $pelicula=Paginacion_Buscar::consultar();

?>

<?php
	foreach ($pelic as $row ): ?>
	<li><img src="img/<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>" width="100%" height="200px" ></li>
	<?php endforeach; ?>

