<?php
  include_once("../Model/conexion.php");
  include_once("../Model/juego_usuario.class.php");
   $consull=Gestion_Videojuego::consultcomprajuego($_GET["cmp"]);
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf8"/>
    <title></title>
      <link rel="stylesheet" href="stylesSheet/estilousuario.css">   
</head>
<body>

<!-- <div id="compJuess">
    <?php

        foreach ($consull as $consulkey) {
            echo " <div class='clImgcompr'><img src=".$consulkey["jue_imagen"]." /></div>
                <ul class='ulInfoCos'>
                    <li>".$consulkey["jue_nom"]."</li>
                    <li>".$consulkey["cons_cod"]."</li>
                    <li>".$consulkey["cat_cod"]."</li>
                </ul>";
        }

    ?>
   
</div> -->

<div id="myModalComprarCreditos" class="modal hide fade in" tabindex="-1" aria-hidden="false" style="display: block;">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">×</button>
               <h3 id="myModalLabel">Te faltan créditos</h3>
            </div>
            <div class="alert alert-danger">
                <p>No tienes suficientes créditos. Puedes conseguirlos intercambiando tus juegos,pagando directamente los créditos que te faltan comprando ahora el juego y los créditos que te faltan, o comprando uno de los packs de créditos que tenemos.</p>               
            </div>
            <div class="modal-header">
               <h3 id="myModalLabel">Comprar ahora el juego</h3>
            </div>
            <form action="/envio_paypal.php" method="post">
                <div class="modal-body_comprar_creditos_modal">
                    <table class="table table-hover tipo_pago_modal">
                        <tbody><tr>
                            
                            <td class="cela_comprar_creditos_juntos">
                                <p class="p_fontsize_12">Créditos que te faltan: <span id="creditos_juego_completar">1200</span> - 0 = <span id="creditos_faltantes">1200</span></p>
                            </td>
                            <td class="cela_comprar_creditos_juntos2">
                                <p class="p_fontsize_12"><span id="falta_pagar_juego_completar">9.96</span>$</p>
                            </td>
                        </tr>
                        <tr> 
                            <td class="cela_comprar_creditos_juntos">
                                <p class="p_fontsize_12">Gastos de envío</p>
                            </td>
                            <td class="cela_comprar_creditos_juntos2">
                                <p class="p_fontsize_12"><span id="total_portes_completar">7.95</span>$</p>
                            </td>
                        </tr>                       
                         <tr> 
                            <td class="cela_comprar_creditos_juntos">
                                <p class="p_fontsize_12"><strong>TOTAL A PAGAR</strong></p>
                            </td>
                            <td class="cela_comprar_creditos_juntos2">
                                <p class="p_fontsize_12"><strong><span id="total_pagar">17.91</span>$</strong></p>
                            </td>
                        </tr>
                    </tbody></table>
                 
                    <table class="table table-hover tipo_pago_modal">
                        <tbody><tr>
                            <td class="cela_radio_comprar_creditos">
                                <input type="radio" name="tipo_compra_completar" id="tipo_compra_completar" value="paypal" required="required" checked="checked">
                            </td>
                            <td class="cela_comprar_creditos1">
                                <div class="img_precios2"><img src="img/log.png" data-src="img/log.png"></div>
                            </td>
                            <td>
                                <p class="p_fontsize_12">PayPal te permite realizar tus compras de forma totalmente segura con tu targeta de crédito.</p>
                            </td>
                        </tr>
                    </tbody></table>
                    <label class="checkbox">
                        <input type="checkbox" name="condiciones_compra" id="condiciones_compra" value="option1" required="required">
                        Acepto las <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">condiciones de compra.</a>
                        <div id="collapseThree" class="accordion-body collapse">
                                                                            <div class="collapse_scroll">
                                                        <br><p>GameTrade pone a su disposición un servicio de compra que le permitirá comprar CRÉDITOS. Los créditos son la moneda que se utiliza en Tradejuegos para adquirir los videojuegos. En el caso de la adquisición de un videojuego se deberán abonar los gastos de envío del mismo.</p>
                                                        

                <button id="boto"><br><a href="comprarpuntos.php" class="float_right btn btn-success margin_top_menos_30">Comprar pack de créditos</a></button>
                    
                <input name="cju_id_completar" id="cju_id_completar" type="hidden" value="341">
                <input name="pago_portes_completar" id="pago_portes_completar" value="1" type="hidden">
                <input name="portes_mas_creditos" id="portes_mas_creditos" value="1" type="hidden">
            </form>
            
        </div>

        </body>
</html>