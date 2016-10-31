<?php
  require_once '../Model/conexion.php';
  require_once '../Model/login.class.php';
  session_start();

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
                   $_SESSION['documento'] = $resul['usu_num_docum'];
                   $_SESSION['nombre'] = $resul['usu_nom'];
                  echo "<script>location.href='../Views/menu_usuario.php' </script>";
                }

              }else {
                  echo "<script>alert('El usuario esta inactivo');
                  self.location.href='../';
                  </script>";
              }

            }else {
              echo "<script>alert('El usuario no existe');
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
