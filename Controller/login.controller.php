<?php
  require_once '../Model/conexion.php';
  require_once '../Model/login.class.php';


  $usu = $_POST["usu"];
  $pas = $_POST["pas"];

  if (isset($_POST["i"])) {
    try {
      $resul = Validar::Login($usu);
      if (password_verify($pas, $resul["usu_pass"])) {
        session_start();
        if ($resul['cod_rol']==1) {
          echo "<script>location.href='../Views/menu_admin.php' </script>";
        }

        else {
          echo "<script>location.href='../Views/userperfil.php' </script>";
        }
      }else {
        echo "Contraseña incorrecta.";
      }
    } catch (Exception $e) {
      echo "error" . $e->getMessage();
    }
  }

 ?>
