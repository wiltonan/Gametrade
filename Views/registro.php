<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");


 $ciu = usuario::consultarciudad();
  $documento = usuario::consultardocumento();
  date_default_timezone_set('America/Bogota');
 ?>


<!DOCTYPE html>
<head>
<meta charset="utf8"/>
	<title>Registro</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/gweb.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  </script>

  <script>

      function myFunction(){
        var x = document.getElementById("usu_pass").value;
        var y = document.getElementById("usu_pass_c").value;
        if (x==y)
        {
          document.getElementById("confirmar").innerHTML="Las contraseñas coinciden";
        }
        else
        {
          document.getElementById("confirmar").innerHTML="Las contraseñas no coinciden";
        }
      }
      </script>


      <style type="text/css">

 body{
  background:url(Imagen/weress.jpg) ;

  }

  h2{
    text-align: center;
    color: white;
  }
  input{
    color: #fff;
  }

      </style>

</head>

<body>

	<div id="dv_main">
	 <?php require_once("header.php"); ?>
  </div>
  <div class="formulariousuario">
      <section>
        <h2>Registrar usuario</h2>
        <form  action="../Controller/usuario.controller.php" method="post">
          <div class="row">
            <div class="class=" col s12>

              <div class="input-field col s6">
                <label for="">Registro</label>
                  <select class="select" name="tipo_cod" required >

                    <option value="" disabled selected>Tipo de documento</option>
                     <?php foreach ($documento as $docu): ?>
                     <option value="<?php echo $docu['tipo_cod'] ?>"><?php echo $docu['tipo_documento']; ?></option>
                   <?php endforeach ?>

                  </select>
              </div>

                <div class="row">
                  <div class="input-field col s6">
                    <input type="number" name="usu_num_docum" required/>
                    <label class="active" for="first_name2">Numero del documento.</label>
                  </div>
                </div>


                  <div class="input-field col s6">
                    <input type="text" name="usu_nom" required/>
                    <label class="active" for="first_name2">Nombre.</label>
                  </div>



                <div class="row">
                  <div class="input-field col s6">
                    <input type="text" name="usu_apell" required/>
                    <label class="active" for="first_name2">Apellido.</label>
                  </div>
                </div>



                  <div class="input-field col s6">
                    <input type="text" name="usu_nick"/>
                    <label class="active" for="first_name2">Nick de usuario.</label>
                  </div>


                <div class="row">
                  <div class="input-field col s6">
                    <input type="email" name="usu_mail" required/>
                    <label class="active" for="first_name2" data-error="Por favor ingrese un correo">Correo electronico.</label>
                  </div>
                </div>


                  <div class="input-field col s6">
                    <input type="password" name="usu_pass" id="usu_pass" required/>
                    <label class="active" for="first_name2">Contraseña.</label>
                  </div>


                <div class="row">
                  <div class="input-field col s6">
                    <input type="password" name="usu_pass" id="usu_pass_c" onkeyup="myFunction()" required/>
                    <span id="confirmar"></span>
                    <label class="active" for="first_name2">Confirmar la contraseña.</label>
                  </div>
                </div>


                  <div class="input-field col s6">
                    <input type="date" name="usu_naci"  required/>
                    <label class="active" for="first_name2">Fecha de nacimiento.</label>
                  </div>


                <!-- <div class="row">
                  <div class="input-field col s5">
                    <input type="text" name="photo"/>
                    <label class="active" for="first_name2">Agrega una foto.</label>
                    <button type="submit" name="agregarphoto">Aceptar</button>
                  </div>
                </div> -->


                  <div class="input-field col s6">
                    <input type="number" name="usu_tel" />
                    <label class="active" for="first_name2">Telefono.</label>
                  </div>


                <div class="row">
                  <div class="input-field col s6">
                    <input type="number" name="usu_cel" required/>
                    <label class="active" for="first_name2">Celular.</label>
                  </div>
                </div>

                <div class="input-field col s6">
                  <select id="ciu_cod" name="ciu_cod" required>
                    <option value="" disabled selected>ciudad</option>
                    <?php foreach ($ciu as $ciudad) {
                        echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
                    }?>
                  </select>
                </div>

                <div class="row">
                  <div class="input-field col s6">
                    <input type="text" name="usu_dir" required/>
                    <label class="active" for="first_name2">Dirreccion.</label>
                  </div>
                </div>
              </div>
            </div>

            <!-- fecha de creacion-->
            <input type="hidden" name="usu_fech" readonly="" value="<?php echo date('d/m/Y')?>"/>

            <button class="waves-effect waves-light btn" class="btn" name="action" value="guardarusuario">Aceptar</button>
          </form>
        </section>
      </div>
</body>
</html>
