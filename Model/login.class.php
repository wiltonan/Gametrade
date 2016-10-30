<?php
  class Validar{
    private static $query;
    private static $prepare;
    private static $resul;

    public static function Login($usu){
      try {
        $sql = ConexionBD::AbrirBD();
        self::$query = "SELECT usu_nick, usu_pass, cod_rol, usu_nom, usu_num_docum, usu_estado FROM tbl_usuario WHERE usu_nick = ? AND usu_estado = 1 ";
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
