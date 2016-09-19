<?php
require_once("../Model/conexion.php");
require_once("../Model/noticiaIndex.class.php");

$accion=$_REQUEST["imgV"];
switch ($accion) {

case 'AgregarSlider':

$directorio= "Imagen/Sliderprincipal/";

$archivo =basename($_FILES["sliderPrincipal"]["name"]);

$extension_archivo=pathinfo($archivo, PATHINFO_EXTENSION);

$archivo = $directorio.$archivo;


$Comprobar=getimagesize($_FILES["sliderPrincipal"]["tmp_name"]);

if ($Comprobar !==false) {

		if ($_FILES["sliderPrincipal"]["size"]>8388608) {
			echo "la imagen supera el tamaño permitido";
		}else{

			if ($extension_archivo != "jpg" && $extension_archivo != "jpeg" && $extension_archivo != "png") {

				echo "solo puede subir imagenes  jpg o png";
			
			}else{
				
				if (move_uploaded_file($_FILES["sliderPrincipal"]["tmp_name"], $archivo)) {
				
				 try {
					  	noticiaIndex::guardar($archivo);
					    echo "Guardado con &eacute;xito";
					  } 
					  	catch (Exception $e)

					  {
					  	echo "No se guard&oacute;" +$e;	
					}
				}else{
					echo "error, ocurrio  el siguiente error<strong>".$_FILES["sliderPrincipal"]["error"]."</stron>";
				}
			}

	}

}else{
	echo "el archivo no es una imagen";
}
	
	break;

	case 'Agregarnoticia':
		
		$directorio= "Imagen/noticia/";

		$archivo =basename($_FILES["Noticia"]["name"]);

		$extension_archivo=pathinfo($archivo, PATHINFO_EXTENSION);

		$archivo = $directorio.$archivo;


		$Comprobar=getimagesize($_FILES["Noticia"]["tmp_name"]);

		if ($Comprobar !==false) {

				if ($_FILES["Noticia"]["size"]>8388608) {
					echo "la imagen supera el tamaño permitido";
				}else{

					if ($extension_archivo != "jpg" && $extension_archivo != "jpeg" && $extension_archivo != "png") {

						echo "solo puede subir imagenes  jpg o png";
					
					}else{
						
						if (move_uploaded_file($_FILES["Noticia"]["tmp_name"], $archivo)) {
						
						 try {
							  	noticiaIndex::guardarNoticia($noticia);
							    echo "Guardado con &eacute;xito";
							  } 
							  	catch (Exception $e)

							  {
							  	echo "No se guard&oacute;" +$e;	
							}
						}else{
							echo "error, ocurrio  el siguiente error<strong>".$_FILES["Noticia"]["error"]."</stron>";
						}
					}

			}

		}else{
			echo "el archivo no es una imagen";
		}
		break;

}
?>