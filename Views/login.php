<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="materialize/css/materialize.css" >
  </head>
  <body>
    <form class="" action="Controller/login.controller.php" method="post">

      <div class="row">
        <div class="class=" col s12>

          <div class="input-field col s1.5">
            <input type="text" class="white-text" name="usu" placeholder="nick">
          </div>

          <div class="input-field col s1.5">
            <input type="password" class="white-text" name="pas" placeholder="Contraseña">
          </div>

          <button type="submit" class="btn purple thin" name="i">In</button>
        </div>
      </div>
    </form>
  </body>
</html>
