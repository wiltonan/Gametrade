<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $usuariomo=usuario::consultarcodigo($_GET["codigo_usuario"]);
  $documento = usuario::consultardocumento();
  $ciu = usuario::consultarciudad();
  $rol = usuario::consultar_rol();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>modificar usuario</title>
     <script type="text/javascript">
       $(document).ready(function() {
         $('#input_text').characterCounter();
       });

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
             <div class="input-field col s6">
              <select class="select" name="cod_rol">
                <option value="" disabled selected>rol: </option>
                <?php foreach ($rol as $roles) {
                  if($roles["cod_rol"] == $usuariomo["cod_rol"]){
                    $selected = "selected";
                  }else{
                    $selected = "";
                  }
                  echo "<option value=".$roles["cod_rol"]." $selected>".$roles["nombre"]."</option>";
                }?>
              </select>
            </div>

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
          </div>

           <div class="row">
             <div class="input-field col s6">
                <label>Numero del documento: </label>
               <input type="number" name="usu_num_docum" value="<?php echo $usuariomo["usu_num_docum"]; ?>"/>
             </div>

             <div class="input-field col s6">
               <label>Nombre: </label>
               <input type="text" name="usu_nom" value="<?php echo $usuariomo["usu_nom"]; ?>"/>
             </div>
           </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Apellido: </label>
               <input type="text" name="usu_apell" value="<?php echo $usuariomo["usu_apell"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Nick de usuario: </label>
               <input type="text" name="usu_nick" value="<?php echo $usuariomo["usu_nick"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Correo electronico: </label>
               <input type="text" name="usu_mail" value="<?php echo $usuariomo["usu_mail"]; ?>"/>
            </div>

            <div class="input-field col s6">
               <input type="date" name="usu_naci" class="datepicker" required value="<?php echo $usuariomo["usu_naci"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input type="password" name="usu_pass" id="usu_pass" required value="<?php echo $usuariomo["usu_pass"]; ?>"/>
              <label class="active" for="first_name2">Contraseña.</label>
            </div>

            <div class="input-field col s6">
              <input type="password" name="usu_pass" id="usu_pass_c" onkeyup="myFunction()" required value="<?php echo $usuariomo["usu_pass"]; ?>"/>
              <span id="confirmar"></span>
              <label class="active" for="first_name2">Confirmar la contraseña.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <label>Celular: </label>
               <input type="number" name="usu_cel" value="<?php echo $usuariomo["usu_cel"]; ?>"/>
            </div>

            <div class="input-field col s6">
              <label>Telefono: </label>
               <input type="number" name="usu_tel" value="<?php echo $usuariomo["usu_tel"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
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

            <div class="input-field col s6">
              <label>Dirreccion: </label>
               <input type="text" name="usu_dir" value="<?php echo $usuariomo["usu_dir"]; ?>"/>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="input_text" type="text" name="usu_esp_vive" length="255" value="<?php echo $usuariomo["usu_esp_vive"]; ?>"/>
              <label class="active" for="first_name2">Especifique su direccion si es necesarrio.</label>
            </div>

            <div class="input-field col s6">
               <select name="usu_estado" id="estado" required value="<?php echo $usuariomo["usu_estado"]; ?>">
                 <option value="0">Estado:</option>
                 <option value="activo">activo</option>
                 <option value="inactivo">inactivo</option>
               </select>
            </div>
          </div>

          <button type="submit" name="action" value="modificarusuario" class="waves-effect waves-light btn">Modificar</button>
         </form>
       </section>
     </div>
     <script type="text/javascript">
     var anhoact= '<?php echo date('Y') ?>';
     var mesact= '<?php echo date('m') ?>';
     var diaact= '<?php echo date('d') ?>';
     var less12 = anhoact-12;
     $('.datepicker').pickadate({
        selectMonths: true, // que se pueda seleccionar el mes
        selectYears: 50, // que se pueda seleccionar el año y cuantos quiere
        format:'yyyy/mm/dd',
        max:less12+'-'+mesact+'-'+diaact,
      });
     </script>
   </body>
 </html>
