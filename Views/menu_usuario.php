<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Menu usario</title>
	<link rel="stylesheet" href="materialize/css/materialize.css">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/usuario.js"></script>
  <script type="text/javascript" src="js/gweb.js"></script>
  <script type="text/javascript" src="js/mindexC.js"></script>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylesSheet/todoestilo.css">
  <link rel="stylesheet" type="text/css" href="stylesSheet/Slider.css"/>
</head>
<body>

  <header>

  <header id="main-header">
    <div id="res"></div>
    <a id="logo-header" href="#">
      <span class="site-name">Anderson correa</span>
      <span class="site-desc">1800 puntos</span>


    </a> <!-- / #logo-header -->

    
    
    <nav class="grey darken-3 ">
      <ul id="menus">
      <li id="misjuegos" ><a href="#/mis juegos" class="white-text">Mis juegos</a></li>
      <li id="buscar"><a href="#/buscar" class="white-text">Buscar</a></li>
        <li id="inicio" onclick="inicio()"><a href="#/inicio" class="white-text">Inicio</a></li>
        
        
        
      </ul>
    </nav>
  </header>
<div id="dv_index">
  <?php 
include_once("conte_usuario.php");
  ?>  
</div>
	<section class="menu_usuario"></section>


<footer id="main-footer">
    <p>&copy; 2016 <a href="http://FranciscoAMK.com">GameTrade@.com</a></p>

  </footer> <!-- / #main-footer -->
</body>
</html>
