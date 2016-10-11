
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="stylesSheet/gstyle_admi.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>
    <div class="parte_negra_menu">
      <img src="imagen/logo.png"/>
    </div>
    <header>
      <nav>
        <ul>
          <li id="inicio"><a href="#/inicio">Inicio</a></li>
          <li id="quienes_somos"><a href="#/Quienes somos">Quienes somos</a></li>
          <li id="contactenos"><a href="#/contactenos">Contactenos</a></li>
          <li id="como_se_usa"><a href="#/como se usa">Como se usa</a></li>
        </ul>
      </nav>
    </header>

    <section id="inicio_index">
      <!-- Organizar esto -->
      <?php include('index.php') ?>
    </section>

    <section class="menu_index"></section>

  </body>
</html>
