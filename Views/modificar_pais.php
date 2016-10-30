<?php
  require_once("../Model/conexion.php");
  require_once("../Model/pais.class.php");

  $pais_mo=Gestion_Pais::consultarcodigo($_GET["codigo_pais"]);
 ?>

 <meta charset="utf-8">
 <div class="pais_mo">
   <section>
     <h4 style="margin-left:40%;">Modificar Pais</h4>
     <form style="margin-left:30%;" action="../Controller/pais.controller.php" method="post">
       <div class="row">
         <input type="hidden" name="pais_cod" readonly value="<?php echo $pais_mo["pais_cod"]; ?>"/>
          <div class="input-field col s8">
             <input type="text" name="pais_nom" required value="<?php echo $pais_mo["pais_nom"]; ?>">
             <label class="active" for="first_name2">Pais:</label>
          </div>
       </div>
       <button style="margin-left:20%;" name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
     </form>
   </section>
 </div>
