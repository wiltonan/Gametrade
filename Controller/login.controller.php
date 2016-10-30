<?php
  require_once '../Model/conexion.php';
  require_once '../Model/login.class.php';

  $usu = $_POST['usu'];
  $pas = $_POST['pas'];

  if (isset($_POST['i'])) {
    try {
      $resul = Validar::Login($usu);
      if (password_verify($pas, $resul['usu_pass'])) {
        session_start();
        if ($resul['usu_estado']=="activo"){
          if ($resul['cod_rol']==1) {
            echo "<script>location.href='../Views/menu_admin.php' </script>";
          }
          else {
            // no se para que es wilton
             $_SESSION['documento'] = $resul['usu_num_docum'];
             $_SESSION['nombre'] = $resul['usu_nom'];
            echo "<script>location.href='../Views/menu_usuario.php' </script>";
          }
        }else {
            echo "<script>alert('El usuario se encuentra inactivo');
            self.location.href='../';
            </script>";
        }
      }else {
        echo "<script>alert('Por favor llene los dos campos.');
        self.location.href='../';
        </script>";
      }
    } catch (Exception $e) {
      echo "error" . $e->getMessage();
    }
  }


// este hay que probarlo para ver como se usa;

  $accion=$_REQUEST['action'];
    switch ($accion) {
      case 'session':
        session_destroy();
        "<script>
          self.location.href='../';
        </script>";
        break;
    }
 ?>
