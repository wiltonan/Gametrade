<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  $documento = usuario::consultardocumento();
  date_default_timezone_set('America/Bogota');
  $rol = usuario::consultar_rol();
  $fecha=date("2004-m-d");
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
        <h4 style="margin-left:45%;">Registrar usuario</h4>
  			<form style="margin-left:15%;" action="../Controller/usuario.controller.php" method="post">

          <div class="row">
              <div class="input-field col s6">
                  <select class="select" name="rol_cod" required >
                    <option value="" disabled selected>Rol</option>
                     <?php foreach ($rol as $rol): ?>
                     <option value="<?php echo $rol['cod_rol'] ?>"><?php echo $rol['nombre']; ?></option>
                   <?php endforeach ?>
                  </select>
              </div>

              <div class="input-field col s6">
                <select class="select" name="tipo_cod" required >
                  <option value="" disabled selected>Tipo de documento</option>
                  <?php foreach ($documento as $docu): ?>
                  <option value="<?php echo $docu['tipo_cod'] ?>"><?php echo $docu['tipo_documento']; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="number" name="usu_num_docum" required/>
                <label class="active" for="first_name2">Numero del documento.</label>
              </div>

              <div class="input-field col s6">
                <input type="text" name="usu_nom" required/>
                <label class="active" for="first_name2">Nombre.</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="text" name="usu_apell" required/>
                <label class="active" for="first_name2">Apellido.</label>
              </div>

              <div class="input-field col s6">
                <input type="text" name="usu_nick"/>
                <label class="active" for="first_name2">Nick de usuario.</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="email" name="usu_mail" required/>
                <label class="active" for="first_name2" data-error="Por favor ingrese un correo">Correo electronico.</label>
              </div>

              <div class="input-field col s6">
                <input type="password" name="usu_pass" id="usu_pass" required/>
                <label class="active" for="first_name2">Contraseña.</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="password" name="usu_pass" id="usu_pass_c" onkeyup="myFunction()" required/>
                <span id="confirmar"></span>
                <label class="active" for="first_name2">Confirmar la contraseña.</label>
              </div>

              <div class="input-field col s6">
                <input type="date" name="usu_naci" max="<?php echo $fecha; ?>" required/>
                <label class="active" for="first_name2">Fecha de nacimiento.</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input type="number" name="usu_tel" />
                <label class="active" for="first_name2">Telefono.</label>
              </div>

              <div class="input-field col s6">
                <input type="number" name="usu_cel" required/>
                <label class="active" for="first_name2">Celular.</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
            		<select id="ciu_cod" name="ciu_cod" required>
                  <option value="" disabled selected>ciudad</option>
            		  <?php foreach ($ciu as $ciudad) {
            		      echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
            		  }?>
                </select>
              </div>

              <div class="input-field col s6">
                <input type="text" name="usu_dir" required/>
                <label class="active" for="first_name2">Dirreccion.</label>
              </div>
            </div>

              <div class="row">
                <div class="input-field col s6">
                  <input id="input_text" type="text" name="usu_esp_vive"length="255"/>
                  <label class="active" for="first_name2">Especifique su direccion si es necesarrio.</label>
                </div>
              </div>

    				  <input type="hidden" name="usu_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>
              <button style="margin-left:40%;" class="waves-effect waves-light btn" class="btn" name="action" value="guardarusuario">Registrar</button>
            </div>
          </div>
  			</form>
      </section>
	  </div>
	</body>
</html>

<div style="margin-left:15%;" class="consultarusuario">
  <?php include('consultar_usuarios.php') ?>
</div>
