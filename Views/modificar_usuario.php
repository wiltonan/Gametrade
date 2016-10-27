<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $usuariomo=usuario::consultarcodigo($_GET["codigo_usuario"]);
  $documento = usuario::consultardocumento();
  $ciu = usuario::consultarciudad();
  $fecha=date("2004-m-d");
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>modificar usuario</title>
     <script type="text/javascript">
       $('select').material_select();
       Materialize.updateTextFields();
     </script>
   </head>
   <body>
     <div class="usuariomodificado">
       <section>
         <h4 style="margin-left:45%;">Modificar usuario</h4>
         <form style="margin-left:15%;" action="../Controller/usuario.controller.php" method="post">

           <div class="row">
             <input type="hidden" name="usu_cod" readonly value="<?php echo $usuariomo["usu_cod"]; ?>" />
             <div class="input-field col s6">
               <select class="select" name="tipo_cod">
                 <option value="" disabled selected>Tipo de documento: </option>
                 <?php foreach ($documento as $docu) {
                   if($docu["tipo_cod"] == $usuariomo["tipo_cod"]){
                     $selected = "selected";
                   }else{
                     $selected = "";
                   }
                   echo "<option value=".$docu["tipo_cod"]." $selected>".$docu["tipo_documento"]."</option>";
                 }?>
               </select>
             </div>

             <div class="input-field col s6">
                <label>Numero del documento: </label>
               <input type="number" name="usu_num_docum" value="<?php echo $usuariomo["usu_num_docum"]; ?>"/>
             </div>
           </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Nombre: </label>
              <input type="text" name="usu_nom" value="<?php echo $usuariomo["usu_nom"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Apellido: </label>
               <input type="text" name="usu_apell" value="<?php echo $usuariomo["usu_apell"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Nick de usuario: </label>
               <input type="text" name="usu_nick" value="<?php echo $usuariomo["usu_nick"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Correo electronico: </label>
               <input type="text" name="usu_mail" value="<?php echo $usuariomo["usu_mail"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Contraseña: </label>
               <input type="password" name="usu_pass" value="<?php echo $usuariomo["usu_pass"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Confirmar la contraseña: </label>
               <input type="password" name="usu_pass" value="<?php echo $usuariomo["usu_pass"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
               <input type="date" name="usu_naci" max="<?php echo $fecha; ?>" value="<?php echo $usuariomo["usu_naci"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Telefono: </label>
               <input type="number" name="usu_tel" value="<?php echo $usuariomo["usu_tel"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Celular: </label>
               <input type="number" name="usu_cel" value="<?php echo $usuariomo["usu_cel"]; ?>"/>
            </div>

            <!-- <div class="input-field col s6">
              <select class="select" name="ciu_cod">
                <option value="" disabled selected>Ciudad: </option>
                <?php foreach ($ciu as $ciudad) {
                  if($ciudad["ciu_cod"] == $usuariomo["ciu_cod"]){
                    $selected = "selected";
                  }else{
                    $selected = "";
                  }
                  echo "<option value=".$ciudad["ciu_cod"]." $selected>".$ciudad["ciu_nom"]."</option>";
                }?>
              </select>
            </div>
          </div> -->

          <div class="row">
            <div class="input-field col s6">
              <label>Dirreccion: </label>
               <input type="text" name="usu_dir" value="<?php echo $usuariomo["usu_dir"]; ?>"/>
            </div>

            <div class="input-field col s6">
               <select name="usu_estado" id="estado" required value="<?php echo $usuariomo["usu_estado"]; ?>">
                 <option value="0">Estado:</option>
                 <option value="1">activo</option>
                 <option value="2">inactivo</option>
               </select>
            </div>
          </div>
          
          <button type="submit" name="action" class="waves-effect waves-light btn">Modificar</button>
         </form>
       </section>
     </div>
   </body>
 </html>
