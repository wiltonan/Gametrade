<?php
//Conexiones para envíar a la BD:
require_once("../Model/conexion.php");
require_once("../Model/noticiaIndex.class.php");

$accion=$_REQUEST["imgV"];
switch ($accion) {
  case 'AgregarVide':


  $video= $_POST["VideoPrincipal"];

  try {
  	noticiaIndex::guardar($video);
    echo "Guardado con &eacute;xito";
  } 
  	catch (Exception $e)

  {
  	echo "No se guard&oacute;" +$e;	
  }

  break;
}
 
?>





<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/connection.js"></script>
    <script type="text/javascript" src="js/gweb.js"></script>
    <script type="text/javascript" src="js/registro.js"></script>







    <div style="color: #fff" id="e63Perfil">Mi perfil</div>
  <div id="e64ConteDato">

    
    <div id="e64Photo">
      
      <img src="imagen/zx.jpg" />
    </div>

    <ul id="ulDatos">

      <li style="color: #000">andres02 </li>
      <li style="color: #000">1850 pts</li>
      <li ><a style="color: #000" href="index.php">Cerrar seccion</a></li>
      
      
    </ul>
  </div>



















  <div style="color: #fff" id="e63Perfil">Mi perfil</div>
  <div id="e64ConteDato">

    
    <div id="e64Photo">
      
      <img src="imagen/zx.jpg" />
    </div>

    <ul id="ulDatos">

      <li style="color: #000">andres02 </li>
      <li style="color: #000">1850 pts</li>
      <li ><a style="color: #000" href="index.php">Cerrar seccion</a></li>
      
      
    </ul>
  </div>

  <div id="FondMe">
    <div id="e64LogoU"></div>


    
    <ul id="menuUsu" class="nav">
      <li>Inicio</li>
      <li>Buscar</li>
      <li>Mis juegos
<ul>
            <li><a href="">hallo 2</a></li>
            <li><a href="">Pes 2017</a></li>
            <li><a href="">Mario Bross</a></li>
            <li><a href="">San Andreas</a>
              
            </li>
          </ul>
      </li>
      <li>Tendencias

      <ul>
            <li><a href="">hallo 2</a></li>
            <li><a href="">Pes 2017</a></li>
            <li><a href="">Mario Bross</a></li>
            <li><a href="">San Andreas</a>
              
            </li>
          </ul>




      </li>
      <li>Tienda


      <ul>
            <li><a href="">hallo 2</a></li>
            <li><a href="">Pes 2017</a></li>
            <li><a href="">Mario Bross</a></li>
            <li><a href="">San Andreas</a>
              
            </li>
          </ul>



      </li>
    </ul>
  </div>




  <img src="http://placekitten.com/800/250" alt="Gatito" />