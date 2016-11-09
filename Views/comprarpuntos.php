
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8"/>
    <title></title>


      <link rel="stylesheet" href="stylesSheet/estilousuario.css">

      <link rel="stylesheet" href="stylesSheet/todoestilo.css">
 <link rel="stylesheet" href="materialize/css/materialize.css">
  <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="js/comprar.js"></script>
</head>
<body>

<div class="modal-body_comprar_creditos">
 <p><strong>PASO 1:</strong> Elige la cantidad de créditos que quieres:</p>	
 <table class="table table-hover comprar_creditos">
     <tbody><tr>
         <td class="cela_radio_comprar_creditos">
             <input type="radio" name="compra_creditos" id="compra_creditos" value="7000" required="required">
         </td>
         <td class="cela_comprar_creditos1">
             <div class="clPun" onclick="puntos1()"><div class="img_coins" ><img src="img/estrella.png" data-src="/img/estrella.png"></div>
                <p>1.000 Creditos</p>
             </div>
         </td>
         <td class="cela_comprar_creditos2">
             <div class="img_precios"><img src="img/paque.png" data-src="/img/precio_4995.png"></div>
         </td>
         <td class="cela_descuentos">
             <div class="img_descuento_gratis"><img src="img/10_gratis.png" data-src="img/10_gratis.png"></div>
         </td>
     </tr>
        
     <tr>
         <td class="cela_radio_comprar_creditos">
             <input type="radio" name="compra_creditos" id="compra_creditos" value="3900" required="required">
         </td>
         <td class="cela_comprar_creditos1">
             <div class="clPun" onclick="puntos2()">
                 <div class="img_coins"><img src="img/estrella.png" data-src="img/estrella.png"></div>
                 <p>2.000 Creditos</p>
             </div>
         </td>
         <td class="cela_comprar_creditos2">
             <div class="img_precios"><img src="img/paquet.png" data-src="/img/precio_2995.png"></div>
         </td>
         <td class="cela_descuentos">
             <div class="img_descuento_gratis"><img src="img/20_gratis.png" data-src="img/20_gratis.png"></div>
         </td>
     </tr>
     <tr>
         <td class="cela_radio_comprar_creditos">
             <input type="radio" name="compra_creditos" id="compra_creditos" value="2400" required="required">
         </td>
         <td class="cela_comprar_creditos1">
            <div class="clPun"  onclick="puntos3()">
                                                            <div class="img_coins"><img src="img/estrella.png" data-src="img/estrella.png"></div>
                                                            <p>5.000 Creditos</p>
                                                            </div>
                                                        </td>
                                                        <td class="cela_comprar_creditos2">
                                                            <div class="img_precios"><img src="img/paquete.png" data-src="/img/precio_1995.png"></div>
                                                        </td>
                                                        <td class="cela_descuentos">
                                                            <div class="img_descuento_gratis">	
                                                                <img src="img/30_gratis.png" data-src="img/30_gratis.png">
                                                            </div>
                                                        </td>
                                                    </tr>
                                          
                                                    <tr>
                                                        <td class="cela_radio_comprar_creditos">
                                                            <input type="radio" name="compra_creditos" id="compra_creditos" value="1100" required="required">
                                                        </td>
                                                        <td class="cela_comprar_creditos1">
                                                            <div class="clPun" onclick="puntos4()">
                                                                <div class="img_coins" ><img src="img/estrella.png" data-src="img/estrella.png"></div>
                                                                <p>10.000 Creditos</p>
                                                            </div>
                                                        </td>
                                                        <td class="cela_comprar_creditos2">
                                                            <div class="img_precios"><img src="img/paq.png" data-src="img/paq.png"></div>
                                                        </td>
                                                        <td class="cela_descuentos">
                                                            <div class="img_descuento_gratis"><img src="img/40_gratis.png" data-src="img/40_gratis.png"></div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                                <p>
                                                    <strong>PASO 2:</strong> Elige una de las modalidad de pago:
                                                </p>	
                                                <table class="table table-hover tipo_pago">
                                                    <tbody><tr>
                                                        <td class="cela_radio_comprar_creditos">
                                                            <input type="radio" name="tipo_compra" id="tipo_compra" value="paypal" required="required" checked="checked">
                                                        </td>
                                                        <td class="cela_comprar_creditos1">
                                                            <div class="img_precios2"><img src="img/logo.png" data-src="img/logo.png"></div>
                                                        </td>
                                                        <td>
                                                            <p class="p_fontsize_12">PayPal te permite realizar tus compras de forma totalmente segura con tu targeta de crédito.</p>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <label class="checkbox">
                                                    <input type="checkbox" name="condiciones_compra" id="condiciones_compra" value="1" required="required">
                                                    Acepto las <a href="#myModal2" data-toggle="modal">condiciones de compra.</a>
                                                </label>
                                            </div>

       </body>
</html>