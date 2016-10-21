<?php
  require_once("../Model/conexion.php");
  require_once("../Model/pais.class.php");

  $pais_mo=Gestion_Pais::consultarcodigo($_GET["codigo_pais"]);
 ?>

 <meta charset="utf-8">
 <div class="pais_mo">
   <section>
     <h1>Modificar Pais</h1>
     <form action="../Controller/pais.controller.php" method="post">
       <input type="hidden" name="pais_cod" readonly value="<?php echo $pais_mo["pais_cod"]; ?>"/>

       <label>Pais: </label>
       <input type="text" name="pais_nom" required value="<?php echo $pais_mo["pais_nom"]; ?>">
       <br>
       <br>
       <button  name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
     </form>
   </section>
 </div>
