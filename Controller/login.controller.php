<?php
session_start();
  require_once '../Model/conexion.php';
  require_once '../Model/login.class.php';

  $accion=$_REQUEST['action'];

    switch ($accion) {
      case 'login':
        $usu = $_POST['usu'];
        $pas = $_POST['pas'];
          try {
            $resul = Validar::Login($usu);
            if (password_verify($pas, $resul['usu_pass'])) {

              if ($resul['usu_estado']=="activo"){

                if ($resul['cod_rol']==1) {
                  $_SESSION['documento'] = $resul['usu_num_docum'];
                  $_SESSION['nombre'] = $resul['usu_nom'];
                  echo "<script>location.href='../Views/menu_admin.php' </script>";
                }else {
                   $_SESSION['documento1'] = $resul['usu_num_docum'];
                   $_SESSION['codigo1'] = $resul['usu_cod'];
                   $_SESSION['nombre1'] = $resul['usu_nom'];
                   // echo $_SESSION['documento1'],$_SESSION['codigo1'],$_SESSION['nombre1'];
                   echo "<script>location.href='../Views/menu_usuario.php' </script>";
                }

              }else {
                  echo "<script>alert('El usuario esta inactivo');
                  self.location.href='../';
                  </script>";
              }

            }else {
              echo "<script>alert('Usuario o contraseña incorrecto');
              self.location.href='../';
              </script>";
            }

          }catch (Exception $e) {
            echo "error" . $e->getMessage();
          }
          break;

// este hay que probarlo para ver como se usa;
      case 'session':
        session_destroy();
        echo "<script>
          self.location.href='../';
        </script>";


    }
 ?>
