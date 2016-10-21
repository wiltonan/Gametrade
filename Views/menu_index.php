
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo APP_TITLE; ?></title>
    <base href="<?php APP_URL ?>">
    <script type="text/javascript" src="Views/js/jquery-1.12.4.min.js"></script>
    <link href="Views/dist/sweetalert.css">
    <script src="Views/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="Views/stylesSheet/conte_index.css">
    <link rel="stylesheet" href="Views/materialize/css/materialize.css">
    <script rel="stylesheet" src="Views/materialize/js/materialize.js"></script>
    <script type="text/javascript" src="Views/js/index.js"></script>
  </head>
  <body style="background-color: #000000;">

    <div class="contenido">
      <div class="parte_negra_menu">

        <div class="logo">
          <img src="Views/imagen/logo.png"/>
        </div>

        <div class="login">
          <!-- <h5 style="color: white; background-color:green; padding-left:100px;">Ingresa aqui</h5> -->
          <?php include(HTML_DIR .'login.php') ?>
        </div>

        <!-- hacer este que falta -->
        <!-- <div class="R_Contraseña">
          <a href="#">Recuperar contraseña</a>
        </div> -->

        <div id="registrarme" class="registrarme">
          <a href="#/registrar_usuario">Registrarme</a>
        </div>

      </div>
    </div>
      <header>
        <nav>
          <ul>
            <li id="inicio" onclick="inicio()"><a href="#/inicio">Inicio</a></li>
            <li id="quienes_somos"><a href="#/quienes_somos">Quienes somos</a></li>
            <li id="contactenos"><a href="#/contactenos">Contactenos</a></li>
            <li id="como_se_usa"><a href="#/como_se_usa">Como se usa</a></li>
          </ul>
        </nav>
      </header>

      <section id="inicio_index">
        <?php include('inicio.index.php') ?>
      </section>

      <section class="menu_index">

      </section>

  </body>
</html>
