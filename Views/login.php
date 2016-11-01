<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="materialize/css/materialize.css" >
  </head>
  <body>
    <div class="formu_login">
      <section>
        <form action="Controller/login.controller.php" method="post">
          <div class="row">
            <div class="input-field col s1.5">
              <input type="text" class="white-text" name="usu" placeholder="Nick" autocomplete="off" required>
            </div>

            <div class="input-field col s1.5">
              <input type="password" class="white-text" name="pas" placeholder="Contraseña" required>
            </div>

            <button type="submit" class="btn blue thin" name="action" value="login">Entrar</button>
          </div>
        </form>
      </section>
    </div>
  </body>
</html>
