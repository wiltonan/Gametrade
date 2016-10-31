<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="materialize/css/materialize.css" >
  </head>
  <body>
    <form action="Controller/login.controller.php" method="post">

      <div class="row">
        <div class="input-field col s1.5">
          <input type="text" class="white-text" name="usu" placeholder="Nick" autocomplete="off" required>
        </div>

        <div class="input-field col s1.5">
          <input type="password" class="white-text" name="pas" placeholder="Contraseña" required>
        </div>

        <button type="submit" class="btn blue thin" name="action" value="login" style="margin-top:25px; margin-left:6px; background-color: #00f;">Entrar</button>
      </div>
    </form>
  </body>
</html>
