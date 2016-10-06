<?php
include_once("../Model/conexion.php");
include_once("../Model/paginacion_class.php");



$pelic=Paginacion_Buscar::consultarlike($_POST["vlparam"]);
// $pelicula=Paginacion_Buscar::consultar();

?>

<?php foreach ($pelic as $row ): ?>
	<li><img src="<?php echo $row["jue_imagen"]?>" title="<?php echo $row["jue_nom"]?>"></li>
<?php endforeach; ?>

