<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>menu administrador.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesSheet/gstyle_admi.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
  </head>
  <body>
    <div class="parte_negra_menu">
      <img src="imagen/logo.png"/>
      <div class="session" onclick="destroy()"><a href="#">Cerrar session</a></div>
    </div>
    <header>
      <nav>
        <ul>
          <li id="inicio" onclick="inicio()"><a href="#/inicio">Inicio</a></li>
          <li id="usuario"><a href="#/usuario">Usuarios</a></li>
          <li><a href="#">Nacionalidad</a>
            <div>
              <ul>
                <li id="pais"><a href="#/pais">Paises</a></li>
                <li id="ciudad"><a href="#/ciudad">Ciudades</a></li>
              </ul>
            </div>
          </li>
          <li id="consola"><a href="#/consolas">Consolas</a></li>
          <li id="punto"><a href="#/puntos">Puntos</a></li>
          <li id="cat_juego"><a href="#/categoria juegos">Categoria juego</a></li>
          <li id="juego"><a href="#/juego">Juego</a></li>
          <li id="bono"><a href="#/bono">Bono</a></li>
        </ul>
      </nav>
    </header>

    <section id="inicio_principal">
      <!-- Aqui hacer un include para llavar a la hoja en la cual vamos a programar -->
    </section>
    <section class="menu_admin"></section>

  </body>
</html>
