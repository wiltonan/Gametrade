<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
 <link rel="stylesheet" type="text/css" href="stylesSheet/gstyle.css"/>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/gweb.js"></script>

<meta charset="UTF-8">
	<title>CONTACTENOS</title>
	<style type="text/css">
   *{
	margin:0;
	padding:0;
	}

	body{
	background:url(Imagen/ne.jpg) #2b2b2a;
	background-position: center;
	}
	form{
		
		width: 360px;
		
		border-radius: 3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		box-shadow: inset 0 0 10px #000;
		margin-left: 35%;
		margin-top: 0%;


	}

	form h1{
		text-align: center;
		color:#fff;
		font-weight: normal;
		font-size: 40pt;
		margin: 30px 0px;
	}

	form input{
		width: 280px;
		height: 35px;
		padding: 0px 10px;
		margin: 10px 30px;
		color: #6d6d6d;
		text-align: center;
	}

	form textarea{
		width: 280px;
		height: 65px;
		padding: 0px 10px;
		margin: 10px 30px;
		color: #6d6d6d;
		text-align: center;

	}
	img{
       margin-right:35px; 
	}

	form a{
		width: 135px;
		margin: 20px 0px 30px 30px;
		height: 40px;
		background: #3c3c3c:/* Old browsers */;
		background: -moz-linear-gradient(top, #3c3c3c 0%, #2a2828 100%); /* FFF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3c3c3c),color-stop(100%,#666666));
		background: webkit-gradient-gradient(top, #3c3c3c 0%, #2a2828 100%);/*chrome10+,Safari5.1+*/
		background: -o-linear-gradient(top, #3c3c3c 0%, #2a2828 100%);/*Opera 11.10+*/
		background: -ms-linear-gradient(top, #3c3c3c 0%, #2a2828 100%);/*IE10+*/
		background: linear-gradient(to bottom, #3c3c3c  0%,  #2a2828 100% ),/*WEC*/
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3c3c3c', endColorstr='#2a2828');
		border: 1px solid #232323;
		color: #fff;
		box-shadow: 0px 2px 0px #000;
		-moz-box-shadow:0px 2px 0px #000;
		-webkit-box-shadow: 0px 2px 0px #000;
		border-radius: 3px;
		-moz-border-radius:3px;
		border-radius: 3px;
		margin-left: 32%;
		margin-top: 2%;
	}
	
	</style>
	
</head>
<body>
<div id=dv_main>
<?php require_once("header.php"); ?>

<form>

	<h1>
		Contactenos
	</h1>
	<input type="text" maxlength="20" placeholder="Nombre"></input>
	<input type="text" maxlength="20" placeholder="Correo Electronico"></input>
	<input type="text" maxlength="20" placeholder="Numero de telefono"></input>
	<textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
	<a class="waves-effect waves-light btn">Enviar</a>
</form>
</div>
</body>
</html>