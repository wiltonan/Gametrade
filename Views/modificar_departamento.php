<?php
  require_once("../Model/conexion.php");
  require_once("../Model/departamento.class.php");

  $departamento_mo=Gestion_departamento::consultarcodigo($_GET["codigo_departamento"]);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>hola</h3>
  </body>
</html>
