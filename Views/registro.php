<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  $documento = usuario::consultardocumento();
  date_default_timezone_set('America/Bogota');

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#input_text').characterCounter();
    });

      $('select').material_select();
    </script>
	</head>
	<body>
	   <div class="formulariousuario">
      <section>
  			<form  style="margin-left:15%;"  action="Controller/registro.controller.php" method="post">
          <h4 style="margin-left:30%">Registrar usuario</h4>
          <div class="row">
            <div class="input-field col s5">
              <select name="tipo_cod" required >
                <option value="" disabled selected>Tipo de documento</option>
                  <?php foreach ($documento as $docu): ?>
                <option value="<?php echo $docu['tipo_cod'] ?>"><?php echo $docu['tipo_documento']; ?></option>
                <?php endforeach ?>
              </select>
            </div>

            <div class="input-field col s5">
              <input type="number" name="usu_num_docum" required/>
              <label class="active" for="first_name2">Numero del documento.</label>
            </div>
         </div>

         <div class="row">
            <div class="input-field col s5">
              <input type="text" name="usu_nom" required/>
              <label class="active" for="first_name2">Nombre.</label>
            </div>

            <div class="input-field col s5">
              <input type="text" name="usu_apell" required/>
              <label class="active" for="first_name2">Apellido.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s5">
              <input type="text" name="usu_nick"/>
              <label class="active" for="first_name2">Nick de usuario.</label>
            </div>

            <div class="input-field col s5">
              <input type="email" name="usu_mail" required/>
              <label class="active" for="first_name2" data-error="Por favor ingrese un correo">Correo electronico.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s5">
              <input type="password" name="usu_pass" id="usu_pass" required/>
              <label class="active" for="first_name2">Contraseña.</label>
            </div>

            <div class="input-field col s5">
              <input type="password" name="usu_pass" id="usu_pass_c" onkeyup="myFunction()" required/>
              <span id="confirmar"></span>
              <label class="active" for="first_name2">Confirmar la contraseña.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s5">
              <input type="date" name="usu_naci" class="datepicker" required/>
              <label class="active" for="first_name2">Fecha de nacimiento.</label>
            </div>

            <div class="input-field col s5">
              <input type="number" name="usu_tel" />
              <label class="active" for="first_name2">Telefono.</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s5">
              <input type="number" name="usu_cel" required/>
              <label class="active" for="first_name2">Celular.</label>
            </div>

            <div class="input-field col s5">
              <select id="ciu_cod" name="ciu_cod" required>
                <option value="" disabled selected>ciudad</option>
                	<?php foreach ($ciu as $ciudad) {
                		echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
                		}?>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s5">
                <input type="text" name="usu_dir" required/>
                <label class="active" for="first_name2">Dirreccion.</label>
              </div>

              <div class="input-field col s5">
                <input id="input_text" type="text" name="usu_esp_vive" length="255"/>
                <label class="active" for="first_name2">Especifique su direccion si es necesarrio.</label>
              </div>
            </div>

    				<input type="hidden" name="usu_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

            <button style="margin-left:34%" class="waves-effect waves-light btn" class="btn" name="action" value="guardarusuario">Registrarme</button>
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
