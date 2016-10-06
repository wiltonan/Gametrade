<?php

function conexion(){

$con = mysql_connect("localhost","root","");

if (!$con){

die('Could not connect: ' . mysql_error());
}

mysql_select_db("database", $con);

return($con);

}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>usuario</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


	<link rel="stylesheet" type="text/css" href="stylesSheet/Slider.css"/>



 
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
        body {
	margin: 0%;
	padding: 0%;
	font-family: Helvetica, Arial, sans-serif;
	color: #666;
	background-image: url(Imagen/ver.jpg); 
	font-size: 1em;
	line-height: 1.5em;
}
 
h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}
 
p {
	margin: 0 0 1.5em 0;
}
 
img {
	max-width: 100%;
	height: auto;
}

#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}
 
/*
 * Logo
 */
#logo-header {

	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	
 
/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}
/*ancho de la mitad*/

				#main-content {
	background: #FAFAFA;
	width: 80%;
	max-width: 1300px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}
 
	#main-content header,
	#main-content .content {
		padding: 45px;
	}


	#main-footer {
		text-align: center;
	background: #333;
	color: white;
	
	padding: 20px;
	margin-top: 85px;
}
	#main-footer p {
		margin: 0;
		text-align: center;
	}
	
	#main-footer a {
		color: white;

	}

	#e64LogoU{
	width: 52px;
	height: 48px;
	background: url(../imagen/logoU.png) no-repeat;
	display: inline-block;

}


#e63JueDestac{
	width: 99%;
	height: 33px;
	background:#00c853;
	font-size: 27px;
	padding-left: 25px;
	padding-top: 20px;
	color: #fff;
}

#ulNoticJue{
	list-style: none;
	width: 97%;
	height: 312px;
	background: #000;
}

#ulNoticJue li{
	display: inline-block;
	width: 18%;
	height: 312px;
	overflow: hidden;
	float: left;
	margin-left: 10px;
	
}

}


#e64Noticia{
	width: 99%;
	height: 63px;
	background: #FF0000;
	font-size: 40px;
	padding-left: 30px !important;
	padding-top: 5px;
	color: #fff;	
}

#e64ConteNoti{
	width:75%;
	height: 800px;
	display: inline-block;
	background: #000;
	overflow: hidden;
	margin-top: -200px;
}

#res{
	display: inline-block;
	width: 52px;
	height: 48px;
	background:url(Imagen/logoU.png); 
}

#logo-header{
	display: inline-block;
}



#dvSlider{
	width: 101%;
	height: 450px;
	background: url(../Imagen/slider.png);
	overflow: hidden;
	vertical-align: top;
	margin-top: -16px;

}


</style>


        </style>
</head>
 
<body>
	
	<header id="main-header">
		<div id="res"></div>
		<a id="logo-header" href="#">
			<span class="site-name">Anderson correa</span>
			<span class="site-desc">1800 puntos</span>
		</a> <!-- / #logo-header -->

		<nav>

			<ul>
			
				<li><a href="#">Inicio</a>


				</li>

				<li><a href="#">Mis juegos</a></li>

					<li ><a style="color: #fff" href="index.php">Cerrar seccion</a></li>
			</ul>	
				
			
		</nav><!-- / nav -->
 
	</header><!-- / #main-header -->
	
	<section id="main-content">
	
		<article>
			<header>

			<div id="dvSlider">
		<div id="captioned-gallery">
			<figure class="slider">
				<figure>
					<img src="Imagen/09.jpg" alt>
					<figcaption>Adquierelo tan solo por 1700 puntos</figcaption>
				</figure>
				<figure>
					<img src="Imagen/08.jpg" alt>
					<figcaption>Adquierelo tan solo por 1650 puntos</figcaption>
				</figure>

                <figure>
					<img src="Imagen/mara.jpg" alt>
					<figcaption>Adquierelo tan solo por 1850 puntos</figcaption>
				</figure>

				<figure>
					<img src="Imagen/10.jpg" alt>
					<figcaption>Adquierelo tan solo por 1500 puntos</figcaption>
				</figure>

				
				
				<figure>
					<img src="Imagen/11.jpg" alt>
					<figcaption>Adquierelo tan solo por 1350 puntos</figcaption>
				</figure>
			</figure>
		</div>
	</div>
 
			</div>

			</header>

			
			<div class="content">

			
			
		</article> <!-- /article -->
	
	</section> <!-- / #main-content -->
 
	
	
	<footer id="main-footer">
		<p>&copy; 2016 <a href="http://FranciscoAMK.com">Anderson correa.com</a></p>

	</footer> <!-- / #main-footer -->
 
	
</body>
</html>