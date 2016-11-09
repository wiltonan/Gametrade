<?php
  include_once("../Model/conexion.php");
  include_once("../Model/juego_usuario.class.php");
   $consull=Gestion_Videojuego::consultcomprajuego($_GET["adqui"]);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8"/>


<title>registrar juego</title>
	<link rel="stylesheet" href="stylesSheet/estilousuario.css">
</head>
<body>
<form action="../Controller/juego_usuario.controller.php" method="post">
<div id="compJuess">
    <?php

        foreach ($consull as $consulkey) {
            echo " <div class='clImgcompr'><img src=".$consulkey["jue_imagen"]." /></div>
                <ul class='ulInfoCos'>
                nombre:
                    <li>".$consulkey["jue_nom"]."<input type='hidden' name='nomjue' value='".$consulkey["jue_nom"]."' /></li>
                    codigo:
                    <li><input type='hidden' name='cod_jueg_usu' value='".$consulkey["jue_cod"]."' /></li>

                    <li>".$consulkey["cons_cod"]."<input name='consol' type='hidden' value='".$consulkey["cons_cod"]."' /></li>
                    consola
                    <li>".$consulkey["cat_cod"]."<input name='catege' type='hidden' value='".$consulkey["cat_cod"]."' /></li>
                </ul>
                <input name='imgInput' type='hidden' value='".$consulkey["jue_imagen"]."' />
                ";
        }

    ?>
</div>
<div class="content">
           
                <div class="row">
                    
        </div>
                <div class="titulos">
                    <h4 class="hidden-phone">Selecciona la condición de tu juego y el precio de venta</h4>
                    <h4 class="visible-phone">CONDICIÓN DEL JUEGO</h4>
                </div>
        <div class="condicion_juego">
                                      
                        <table class="table-hover">
                            <tbody>
                                <tr>
                                    <td class="cela_8">
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="1" required="required">  Nuevo con precinto</b>
                                            <p>El juego es nuevo con precinto. Nunca ha sido abierto.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="2" required="required">  Casi nuevo</b>
                                            <p>El juego funciona perfectamente. No presenta ningún desperfecto y viene con la caja y manual de usuario en perfecto estado.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="3" required="required">  En muy buenas condiciones</b>
                                            <p>El juego funciona perfectamente. Tiene alguna rallada en la caja o algún desperfecto en el manual de usuario.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="4" required="required">  Buenas condiciones</b>
                                            <p>El juego funciona perfectamente. No está en su caja original o no tiene el manual de usuario. El juego nunca ha sido intercambiado.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="5" required="required">  Aceptables condiciones</b>
                                            <p>El juego funciona perfectamente. No está en su caja original ni tiene el manual de usuario. El juego ya ha sido intercambiado en otras ocasiones.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b>Notas (opcional)</b>
                                            <textarea name="cju_comentario" id="cju_comentario" class="form-control" rows="3" placeholder="Información addicional..."></textarea>
                                            <p>Escribir información addicional sobre el estado del producto puede ayudarte a vender mejor tu juego.</p>
                                        </div>
                                        
                                        <div class="visible-phone width_360">
                                            <div class="li_creditos_2">
                                               
                                                <img class="star_profile2" src="img/estre.png" data-src="img/estre.png">
                                                <!-- <b>400</b> -->
                                                agrega el puntaje de tu videojuego
                                                <input name="cju_creditos" id="cju_creditos" value="400" type="number" maxlength="5" size="5" max="99999" min="0" required="required">
                                                 </br>
                                                   </br>
                                                <button class="btn-primary " name="action" value="catalogo" >Poner en catalogo</button>
                                              </form>

  </body>
</html>