<?php
  session_start();
  if (!isset($_SESSION["nombre"]))	 {
  // header("Location:../");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>menu administrador.</title>
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <link href="dist/sweetalert.css">
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="stylesSheet/gstyle_admi.css">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <script rel="stylesheet" src="materialize/js/materialize.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
  </head>
  <body>
    <div class="parte_negra_menu">

      <div class="logo">
        <img src="imagen/logo.png"/>
      </div>

      <div class="session" onclick="destroy()">
        <a href="#">Cerrar sesion</a>
      </div>
    </div>

    <header>
      <nav>
        <ul>
          <li id="inicio" onclick="inicio()"><a href="#/inicio">Inicio</a></li>
          <li id="usuario"><a href="#/usuario">Usuarios</a></li>
          <li><a href="#">Nacionalidad</a>
            <div>
              <ul>
                <li id="ciudad"><a href="#/ciudad">Ciudades</a></li>
                <li id="departamento"><a href="#/departamento">Departamento</a></li>
                <li id="pais"><a href="#/pais">Paises</a></li>
              </ul>
            </div>
          </li>
          <li id="consola"><a href="#/consolas">Consolas</a></li>
          <li id="punto"><a href="#/puntos">Puntos</a></li>
          <li id="cat_juego"><a href="#/categoria_juegos">Categoria juego</a></li>
          <li id="juego"><a href="#/juego">Juegos</a></li>
          <li id="bono"><a href="#/bono">Bonos</a></li>
          <li id="usupuntos"><a href="#/usuario_x_puntos">usuarios x puntos</a></li>
      </nav>
    </header>
    <section id="inicio_principal">
    </section>

    <section class="menu_admin"></section>

  </body>
</html>
