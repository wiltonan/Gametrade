<!DOCTYPE html>
<html>
<head>
<meta charset="utf8"/>


	<title></title>

	
	<link rel="stylesheet" href="stylesSheet/todoestilo.css">
	


</head>
<body>

 

<div class="span8">
                    	<div class="img3" id="imagen"><img src="img/02.jpg"></div>

                        <div id="conter">
                            <h4>Medieval Moves</h4>

                            <class="plataforma"><strong>Plataforma:</strong> Playstation 3</p>
                            <p class="plataforma"><strong>Género:</strong> Aventuras</p>
                            <p class="plataforma"><strong>Año de publicación:</strong> 2016</p>
                            <p class="plataforma"><strong>Valor:</strong> 1600 puntos</p>

                            </div>
                        </div>
                    </div>

<div class="condicion_juego">
                                        <div class="titulos">
                    <h4 class="hidden-phone" id="ver">Selecciona la condición de tu juego y el precio de venta</h4>
                    <h4 class="visible-phone" id="ve">CONDICIÓN DEL JUEGO</h4>
                </div><form id="validatedForm" action="/user-profile-my" method="post" novalidate="">
                        <table class="table-hover">
                            <tbody>
                                <tr>
                                    <td class="cela_8">
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="1" required="required">  Nuevo con precinto</b>
                                            <p>El juego es nuevo con precinto. Nunca ha sido abierto.</p>
                                        </div>
                                                                                <div class="cont_cela_8">
                                            <b><input type="radio" id="cju_eju_id" name="cju_eju_id" value="2" required="required" checked="checked">  Casi nuevo</b>
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
                                               
<!--                                                 <img class="star_profile2" src="/img/star.png" data-src="/img/star.png">
                                                <b>1200</b>
                                                <p>Precio recomendado por gametrade.com</p>
                                            
                                            
                                                <img class="star_profile2" src="/img/star.png" data-src="/img/star.png">
                                                <b>1200</b>
                                                <input name="cju_creditos" id="cju_creditos" value="1200" type="number" maxlength="5" size="5" max="99999" min="0" required="required">
                                                <p>El precio siempre se puede cambiar posteriormente</p>
                                                <input class="btn btn-primary" name="" value="Actualizar juego" type="submit">
                                                <input name="action" value="catalogar" type="hidden"> -->
                                                                                               <!--  <input type="hidden" name="cju_id" id="cju_id" value="419">  
                                                                                            </div>	 -->

                                        </div>    
                                    </td>
                                    <td class="cela_9 hidden-phone">
                                        <div class="cont_cela_9">
                                            <div class="img_coins"><img src="/img/star.png" data-src="/img/star.png"></div>
                                            <b>1200</b>
                                            <p>Precio recomendado por gametrade.com</p>
                                        </div>	
                                        <div class="cont_cela_10">
                                            <!--
                                            <a class="btn" href="#">
                                                <i class="icon-chevron-left"></i>
                                            </a>
                                            -->
                                            <div class="img_coins_add"><img src="/img/star.png" data-src="/img/star.png"></div>
                                            <!-- <b>1200</b> -->
                                            <input name="cju_creditos" id="cju_creditos" value="1200" type="number" maxlength="5" size="5" max="99999" min="0" required="required">
                                            
                                            
                                            <a class="btn" href="#">
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                            
                                            <p>El precio siempre se puede cambiar posteriormente</p>
                                            <input class="btn btn-primary" name="" value="Actualizar juego" type="submit">
                                            <input name="action" value="catalogar" type="hidden">
                                                                                        <input type="hidden" name="cju_id" id="cju_id" value="419">  
                                                                                    </div>
                                        <div class="cont_cela_11">
                                            <p>A partir de este momento el juego Medieval Moves pasará a formar parte del catálogo de gametrade y estará en disposición de ser adquirido por parte de cualquier usuario registrado en nuestra comunidad.</p>
                                            <p>Recuerda que si aún no has rellenado correctamente todos tus datos ahora es el momento. Nuestra empresa de transporte se pondrá en contacto contigo para recoger tu juego en el momento en que se produzca la compra.</p>
                                            <input type="checkbox" name="aceptar" id="aceptar" required="required" style="margin-top: 0px;"><b> Confirmo que el juego se encuentra disponible y en las condiciones que he descrito</b>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input name="cju_jue_id" id="cju_jue_id" value="2774" type="hidden">
                        <input name="nof5" type="hidden" value="1715446426">
                    </form>
                </div>

  </body>
</html>