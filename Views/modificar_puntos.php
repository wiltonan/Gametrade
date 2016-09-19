<?php
  require_once("../Model/conexion.php");
  require_once("../Model/puntos.class.php");

  $punto_mo=puntos::consultarcodigo(base64_decode($_GET["codigo_punto"]));
 ?>

 <meta charset="utf-8">
 <div class="punto_mo">
   <section>
     <h1>Modificar puntos</h1>
     <form action="../Controller/puntos.controller.php" method="post">
       <input type="hidden" name="pto_cod" readonly value="<?php echo $punto_mo["pto_cod"]; ?>"/>

       <label>Cantidad: </label>
       <input type="text" name="pto_cant" required value="<?php echo $punto_mo["pto_cant"]; ?>">
       <br><br>

       <label>valor ($): </label>
       <input type="text" name="pto_moneda" required value="<?php echo $punto_mo["pto_moneda"]; ?>">
       <br><br>

       <label>Descripcion: </label>
       <input type="text" name="pto_desc" required value="<?php echo $punto_mo["pto_desc"]; ?>">
       <br><br>

       <button  name="action" value="modificar">Modificar</button>
     </form>
   </section>
 </div>
