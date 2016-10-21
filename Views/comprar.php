
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8"/>
    <title></title>


      <link rel="stylesheet" href="stylesSheet/todoestilo.css">
</head>
<body>



<div id="myModalComprarCreditos" class="modal hide fade in" tabindex="-1" aria-hidden="false" style="display: block;">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">×</button>
               <h3 id="myModalLabel">Te faltan créditos</h3>
            </div>
            <div class="alert alert-danger">
                <p>No tienes suficientes créditos. Puedes conseguirlos intercambiando tus juegos,<!--pagando directamente los créditos que te faltan--> comprando ahora el juego y los créditos que te faltan, o comprando uno de los packs de créditos que tenemos.</p>
                 
                <br><a href="/comprar-creditos" class="float_right btn btn-success margin_top_menos_30">Comprar pack de créditos</a>
                    
                
            </div>
            <div class="modal-header">
               <h3 id="myModalLabel">Comprar ahora el juego</h3>
            </div>
            <form action="/envio_paypal.php" method="post">
                <div class="modal-body_comprar_creditos_modal">
                    <table class="table table-hover tipo_pago_modal">
                        <tbody><tr>
                            
                            <td class="cela_comprar_creditos_juntos">
                                <p class="p_fontsize_12">Créditos que te faltan: <span id="creditos_juego_completar">600</span> - 0 = <span id="creditos_faltantes">600</span></p>
                            </td>
                            <td class="cela_comprar_creditos_juntos2">
                                <p class="p_fontsize_12"><span id="falta_pagar_juego_completar">5.4</span>$</p>
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
                                <p class="p_fontsize_12"><strong><span id="total_pagar">13.35</span>$</strong></p>
                            </td>
                        </tr>
                    </tbody></table>
                   <!-- <p>
                        Se van a restar <span id="creditos_restar_completar">0</span> créditos de tus 0.
                    </p>
                    <p>
                        Te faltan <span id="creditos_faltantes">0</span> para llegar al total de créditos del juego que son <span id="creditos_juego_completar">0</span>. El precio de los créditos que te faltan es de <span id="falta_pagar_juego_completar">?</span>€.
                    </p>                                                

                    <p>
                        Vas a pagar los <span id="total_portes_completar">?</span>€ de portes del envio del paquete más <span id="falta_pagar_juego_completar">?</span>€ por los créditos que te faltan.
                    </p>
                <!--<p>
                        Vas a pagar los <span id="total_portes_completar">?</span>€ de portes del envio del paquete más <span id="falta_pagar_juego_completar">?</span>€ por los créditos que te faltan.
                    </p>-->
                   <!-- <p>
                        <strong>TOTAL A PAGAR = <span id="total_pagar">?</span>€.</strong>
                    </p>-->
                    <table class="table table-hover tipo_pago_modal">
                        <tbody><tr>
                            <td class="cela_radio_comprar_creditos">
                                <input type="radio" name="tipo_compra_completar" id="tipo_compra_completar" value="paypal" required="required" checked="checked">
                            </td>
                            <td class="cela_comprar_creditos1">
                                <div class="img_precios2"><img src="/img/logo_paypal.png" data-src="/img/logo_paypal.png"></div>
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
                                                        <br><p>Tradejuegos pone a su disposición un servicio de compra que le permitirá comprar CRÉDITOS. Los créditos son la moneda que se utiliza en Tradejuegos para adquirir los videojuegos. En el caso de la adquisición de un videojuego se deberán abonar los gastos de envío del mismo.</p>
                                                        <p>Las presentes Condiciones Generales de Compra se aplican a la venta y adquisición de todos los servicios ofrecidos por Tradejuegos a través de su página Web, www.tradejuegos.com a compradores particulares, empresas o cualquier otro destinatario final, 
                                                         solamente dentro del territorio español, excluyendo las islas Canarias, Ceuta y Melilla por la imposibilidad de operar en este territorio de nuestra agencia de transportes. La utilización por parte del COMPRADOR de los servicios de Tradejuegos presupone la aceptación de estas Condiciones Generales de Compra, que estarán disponibles en el momento de realizar el pedido a través de la página Web. Por eso, es conveniente que EL COMPRADOR lea atentamente dichas Condiciones Generales antes de continuar con la operación de compra.
                                                        <br>Si el comprador selecciona la opción "Acepto las condiciones de compra”, se considerará que las entiende y acepta plenamente y podrá continuar con el proceso de compra.</p>
                                                        <h5>1. PRECIOS</h5>
                                                        <p>Los precios de nuestros productos se expresan en Euros y, de conformidad con lo dispuesto en el artículo 68 de la Ley 37/1992, de 28 de diciembre, los precios expresados también incluyen el IVA.
                                                        <br>Las ofertas estarán debidamente marcadas e identificadas como tales. Tradejuegos se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar productos y precios. El precio aplicable será el que conste en el momento que EL COMPRADOR realizó la compra.
                                                        </p><h5>2. FORMA DE PAGO</h5>
                                                        <p>Todas las compras se pueden pagar a través del servicio de Paypal.
                                                        <br>PayPal es un servicio de pago rápido y seguro que opera en gran parte del mundo y acepta todo tipo de formas de pago, la más común es con tarjeta de crédito aunque también puedes utilizar transferencias bancarias. Cuando acceda a PayPal desde nuestra página tendrá dos opciones, o registrarse como usuario en Paypal y utilizar así la cuenta en futuras compras o comprar directamente pulsando el enlace "Continuar". Consulte las condiciones de pago en Paypal para más detalles sobre la forma de pago.</p>
                                                        <h5>3. ENTREGAS</h5>
                                                        <p>Una vez realizado el pago a través de PayPal, Tradejuegos le enviará un email con la confirmación de que el pago ha sido recibido correctamente. A partir de ese momento tendrá disponibles los créditos adquiridos en su cuenta. Los nuevos créditos se sumarán a los existentes si así fuera el caso.
                                                        <br>En el caso de la adquisición de videojuegos, nuestra empresa de transporte se pondrá en contacto con las dos partes de un intercambio, comprador y vendedor, para recoger y entregar un videojuego.
                                                        <br>Una vez confirmado el pago, el plazo de entrega se estimará entre 24 y 48h. La empresa no se responsabiliza si los períodos de entrega se prolongan por causas de fuerza mayor y tampoco se responsabiliza si las direcciones de entrega son incompletas o incorrectas.</p>
                                                        <h5>4. INCIDENCIAS</h5>
                                                        <p>Para cualquier consulta o incidencia relacionada con su compra podrá contactar con el servicio de atención al cliente a través de email: info@tradejuegos.com</p>	
                                                        <h5>5. GARANTÍA Y REEMBOLSO</h5>
                                                        <p>Tradejuegos garantiza el reembolso de una compra de créditos dentro de los quince días siguiente al día de realización de la misma, siempre y cuando, no se hayan consumido ninguno de los créditos adquiridos. El reembolso implicará la pérdida automática de los créditos adquiridos en dicha compra.
                                                        <br>Además deberá comunicar previamente a nuestro Servicio de Atención al Cliente. Este paso es indispensable para poder proceder a la devolución. Puede hacerlo enviándonos un correo electrónico a info@tradejuegos.com</p>
                                                        <p>En el caso que el comprador no reciba el juego que solicitó o no funciona, es posible que le pidamos que lo envíe a la sede de Tradejuegos para la prueba y confirmación. Una vez confirmado uno de estos casos se le devolverán los créditos a su cuenta de tradejuegos.com para que los vuelva a utilizar. Los gastos de envío correrán a cuenta del usuario.
                                                        <br>En el caso que el vendedor envíe un juego que no funciona u otro al solicitado y Tradejuegos lo haya confirmado, NO se le ingresaran los créditos equivalentes al intercambio del mismo y el vendedor correrá a cargo de los gastos de envío si requiere de vuelta su juego.</p>
                                                        <p>El usuario se compromete a la veracidad del juego que pone en el catálogo de tradejuegos, su correcto funcionamiento y que no hace ningún uso de la piratería.</p>
                                                    </div>                        </div>
                    </label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success"><i class="icon-shopping-cart icon-white"></i> Confirmar pedido</button>
                </div>
                <input name="cju_id_completar" id="cju_id_completar" type="hidden" value="341">
                <input name="pago_portes_completar" id="pago_portes_completar" value="1" type="hidden">
                <input name="portes_mas_creditos" id="portes_mas_creditos" value="1" type="hidden">
            </form>
            
        </div>

        </body>
</html>