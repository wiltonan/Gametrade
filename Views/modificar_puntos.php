<?php
  require_once('../Model/conexion.php');
  require_once('../Model/puntos.class.php');

  $punto_mo=puntos::consultarcodigo($_GET['codigo_punto']);
 ?>

 <meta charset="utf-8">
 <div class="punto_mo">
   <section>
     <h4 style="margin-left:45%;">Modificar puntos</h4>
     <form style="margin-left:15%;" action="../Controller/puntos.controller.php" method="post">
       <div class="row">
        <input type="hidden" name="pto_cod" readonly value="<?php echo $punto_mo["pto_cod"]; ?>"/>

         <div class="input-field col s6">
           <input type="text" name="pto_cant" required value="<?php echo $punto_mo["pto_cant"]; ?>">
           <label class="active" for="first_name2">Cantidad: </label>
         </div>

         <div class="input-field col s6">
           <input type="text" name="pto_moneda" required value="<?php echo $punto_mo["pto_moneda"]; ?>">
           <label class="active" for="first_name2">Valor ($): </label>
         </div>
       </div>
       <button style="margin-left:40%;" name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
     </form>
   </section>
 </div>
