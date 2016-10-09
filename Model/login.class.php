<?php
  class Validar{
    private static $query;
    private static $prepare;
    private static $resul;

    public static function Login($usu){
      try {
        $sql = ConexionBD::AbrirBD();
        self::$query = "SELECT usu_nick, usu_pass, cod_rol FROM tbl_usuario WHERE usu_nick = ?";
        self::$prepare = $sql->prepare(self::$query);
        self::$prepare->execute(array($usu));
        self::$resul = self::$prepare->fetch(PDO::FETCH_BOTH);

        return self::$resul;

      } catch (Exception $e) {
        echo "Error" . $e->getMessage();
      }
    }
  }
 ?>
