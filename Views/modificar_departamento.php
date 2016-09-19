<?php
  require_once("../Model/conexion.php");
  require_once("../Model/departamento.class.php");

  $departamento_mo=Gestion_Departamento::consultarporcodigo(base64_decode($_GET["codigo_departamento"]));
 ?>

 <meta charset="utf-8">
 <div class="pais_mo">
   <section>
     <h4>Modificar departamento</h4>
     <form action="../Controller/departamento.controller.php" method="post">
       <input type="hidden" name="depar_cod" readonly value="<?php echo $departamento_mo["depar_cod"]; ?>"/>

       <div class="row">
           <div class="class=" col s12>

              <div class="input-field col s6">
                <input type="text" name="depar_nom" required value="<?php echo $departamento_mo["depar_nom"]; ?>">
                <label class="active" for="first_name2">Departamento.</label>
              </div>

              <div class="input-field col s6">
                <input type="text" name="pais_cod" required value="<?php echo $departamento_mo["pais_cod"]; ?>">
                <label class="active" for="first_name2">Pais.</label>
              </div>

              <div class="input-field col s6">
                <input type="text" name="estado" required value="<?php echo $departamento_mo["estado"]; ?>">
                <label class="active" for="first_name2">Estado.</label>
              </div>

           </div>
         </div>
       <button  name="action" value="modificar" class="waves-effect waves-light btn">Modificar</button>
     </form>
   </section>
 </div>
