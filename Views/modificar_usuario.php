<?php
  require_once("../Model/conexion.php");
  require_once("../Model/usuario.class.php");

  $ciu = usuario::consultarciudad();
  $documento = usuario::consultardocumento();
  $usuariomo=usuario::consultarcodigo(base64_decode($_GET["codigo_usuario"]));
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>modificar usuario</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
   </head>
   <body>
     <div class="usuariomodificado">
       <h1 style="text-align: center;">Modificar usuario</h1>
       <form  action="../Controller/usuario.controller.php" method="post">

         <input type="hidden" name="usu_cod" readonly value="<?php echo $usuariomo["usu_cod"]; ?>" />

         <label for="">Tipo de documento: </label>
         <select id="tipo_cod" name="tipo_cod" required>
           <?php
             echo "<option>Seleccione</option>";
               foreach ($documento as $docu) {
                 echo "<option value=".$docu["tipo_cod"].">".$docu["tipo_documento"]."</option>";
             }
            ?>
         </select>
         <br><br>

 				<label>Numero del documento: </label>
 				<input type="number" name="usu_num_docum" value="<?php echo $usuariomo["usu_num_docum"]; ?>"/>
 				<br><br>

 				<label>Nombre: </label>
 				<input type="text" name="usu_nom" value="<?php echo $usuariomo["usu_nom"]; ?>"/>
 				<br><br>

 				<label>Apellido: </label>
 				<input type="text" name="usu_apell" value="<?php echo $usuariomo["usu_apell"]; ?>"/>
 				<br><br>

 				<label>Nick de usuario: </label>
 				<input type="text" name="usu_nick" value="<?php echo $usuariomo["usu_nick"]; ?>"/>
 				<br><br>

 				<label>Correo electronico: </label>
 				<input type="text" name="usu_mail" value="<?php echo $usuariomo["usu_mail"]; ?>"/>
 				<br><br>

 				<label>Contraseña: </label>
 				<input type="password" name="usu_pass" value="<?php echo $usuariomo["usu_pass"]; ?>"/>
 				<br><br>

 				<label>Confirmar la contraseña: </label>
 				<input type="password" name="usu_pass" value="<?php echo $usuariomo["usu_pass"]; ?>"/>
 				<br><br>

 				<label>Fecha de nacimiento: </label>
 				<input type="date" name="usu_naci" value="<?php echo $usuariomo["usu_naci"]; ?>"/>
 				<br><br>

 				<label>Agrega una foto: </label>
 				<input type="text" name="photo" value="<?php echo $usuariomo["photo"]; ?>"/>

        <button type="submit"  name="agregarphoto"><a class="waves-effect waves-light btn">Aceptar</button></a>

 				<br><br>

 				<label>Telefono: </label>
 				<input type="number" name="usu_tel" value="<?php echo $usuariomo["usu_tel"]; ?>"/>
 				<br><br>

 				<label>Celular: </label>
 				<input type="number" name="usu_cel" value="<?php echo $usuariomo["usu_cel"]; ?>"/>
 				<br><br>

         <label>Ciudad: </label>
 				<select id="ciu_cod" name="ciu_cod" value="<?php echo $usuariomo["ciu_cod"]; ?>">
 		      <?php
 		        echo "<option>Seleccione</option>";
 		          foreach ($ciu as $ciudad) {
 		            echo "<option value=".$ciudad["ciu_cod"].">".$ciudad["ciu_nom"]."</option>";
 		        }
 		       ?>
         </select>
         <br><br>

 				<label>Dirreccion: </label>
 				<input type="text" name="usu_dir" value="<?php echo $usuariomo["usu_dir"]; ?>"/>
 				<br><br>

        <label for="">estado: </label>
         <select name="usu_estado" id="estado" required value="<?php echo $usuariomo["usu_estado"]; ?>">
           <option value="0">Seleccionar</option>
           <option value="1">activo</option>
           <option value="2">inactivo</option>
         </select>
         <br><br>


         <button type="submit" name="action"><a class="waves-effect waves-light btn">Modificar</button></a>

       </form>
     </div>

   </body>
 </html>
