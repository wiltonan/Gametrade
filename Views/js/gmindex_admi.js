$(document).ready(function() {

$("#liEdit").fadeOut();
$("#liSave").fadeOut();
$("#liCancel").fadeOut();

cargarforumario();

});

/*esto es parte del menu*/
function cargarforumario(){

  $("#dvMinicio").click(function(){
  $("#stMain").load("inicio.php");
  });

  $("#dvMusuario").click(function(){
 	$("#stA_usuario").load("admin_usuario.php");
 	});

  $("#dvMnacionalidad").click(function(){
 	$("#dvPais").load("pais.php");
 	});

 	$("#dvMnacionalidad").click(function(){
 	$("#dvDepartament").load("departamento.php");
 	});

 	$("#dvMnacionalidad").click(function(){
 	$("#dvCiudad").load("ciudad.php");
 	});

 	$("#dvMconsola").click(function(){
 	$("#stA_Consola").load("admin_consola.php");
 	});

  $("#dvMpuntos").click(function(){
  $("#stA_Puntos").load("puntos.php");
  });

	$("#dvMcategor").click(function(){
 	$("#stA_Categoria").load("Categoria_jue.php");
 	});

  $("#dvMjuego").click(function(){
 	$("#stA_juego").load("juego.php");
 	});

 	$("#dvMbono").click(function(){
 	$("#stA_Bono").load("bono.php");
 	});

  $("#dvMbonos").click(function(){
 	$("#stA_categoriabono").load("admin_categoria_bono.php");
 	});
}

function sbDisabled(v_var){
	if (v_var==false) {
		$("#txtUsuario").removeAttr("disabled");
		$("#txtCodigo").removeAttr("disabled");
		$("#cbConsol").removeAttr("disabled");
		$("#cbCategor").removeAttr("disabled");
		$("#txtName").removeAttr("disabled");
		$("#txtDetail").removeAttr("disabled");
		$("#txtCantidad").removeAttr("disabled");
		$("#txtImagen").removeAttr("disabled");
		$("#txtTrailer").removeAttr("disabled");
		$("#txtEstado").removeAttr("disabled");
		$("#txtFecha").removeAttr("disabled");
		$("#txtClaves").removeAttr("disabled");
	}else{

		$("#txtUsuario").attr("disabled","disabled");
		$("#txtCodigo").attr("disabled","disabled");
		$("#cbConsol").attr("disabled","disabled");
		$("#cbCategor").attr("disabled","disabled");
		$("#txtName").attr("disabled","disabled");
		$("#txtDetail").attr("disabled","disabled");
		$("#txtCantidad").attr("disabled","disabled");
		$("#txtImagen").attr("disabled","disabled");
		$("#txtTrailer").attr("disabled","disabled");
		$("#txtEstado").attr("disabled","disabled");
		$("#txtFecha").attr("disabled","disabled");
		$("#txtClaves").attr("disabled","disabled");
	}
}

function sbJueAdmi(v_var){
	switch(v_var){
		case '1':
			sbDisabled(false);
			$("#txtUsuario").focus();
			$("#liSave").fadeIn();
			$("#liCancel").fadeIn();
		break;

	}
}

/*aqui es donde se le da el efecto al menu*/
function sbMenu(v_var){
	switch(v_var){

    case "inicio":
      $("#stA_usuario").fadeOut();
      $("#stA_nacionalidad").fadeOut();
      $("#stA_Consola").fadeOut();
      $("#stA_Puntos").fadeOut();
      $("#stA_Categoria").fadeOut();
			$("#stA_juego").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_categoriabono").fadeOut();
			$("#stMain").fadeIn(1000);
		break;

		case "usuario":
			$("#stMain").fadeOut();
      $("#stA_nacionalidad").fadeOut();
      $("#stA_Consola").fadeOut();
      $("#stA_Puntos").fadeOut();
      $("#stA_Categoria").fadeOut();
			$("#stA_juego").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_categoriabono").fadeOut();
			$("#stA_usuario").fadeIn(1000);
		break;

    case "nacionalidad":
			$("#stMain").fadeOut();
			$("#stA_usuario").fadeOut();
      $("#stA_Consola").fadeOut();
      $("#stA_Puntos").fadeOut();
      $("#stA_Categoria").fadeOut();
			$("#stA_juego").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_categoriabono").fadeOut();
			$("#stA_nacionalidad").fadeIn(1000);
		break;

    case "consola":
			$("#stMain").fadeOut();
			$("#stA_usuario").fadeOut();
		  $("#stA_nacionalidad").fadeOut();
      $("#stA_Puntos").fadeOut();
      $("#stA_Categoria").fadeOut();
			$("#stA_juego").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_categoriabono").fadeOut();
			$("#stA_Consola").fadeIn(1000);
		break;

    case "punto":
    $("#stMain").fadeOut();
    $("#stA_usuario").fadeOut();
    $("#stA_nacionalidad").fadeOut();
    $("#stA_Consola").fadeOut();
    $("#stA_Categoria").fadeOut();
    $("#stA_juego").fadeOut();
    $("#stA_Bono").fadeOut();
    $("#stA_categoriabono").fadeOut();
			$("#stA_Puntos").fadeIn(1000);
		break;

    case "categoriajuego":
    $("#stMain").fadeOut();
    $("#stA_usuario").fadeOut();
    $("#stA_nacionalidad").fadeOut();
    $("#stA_Consola").fadeOut();
    $("#stA_Puntos").fadeOut();
    $("#stA_juego").fadeOut();
    $("#stA_Bono").fadeOut();
    $("#stA_categoriabono").fadeOut();
		$("#stA_Categoria").fadeIn(1000);
		break;

		case "juego":
    $("#stMain").fadeOut();
    $("#stA_usuario").fadeOut();
    $("#stA_nacionalidad").fadeOut();
    $("#stA_Consola").fadeOut();
    $("#stA_Puntos").fadeOut();
    $("#stA_Categoria").fadeOut();
    $("#stA_Bono").fadeOut();
    $("#stA_categoriabono").fadeOut();
		$("#stA_juego").fadeIn(1000);
		break;


		case "bono":
    $("#stMain").fadeOut();
    $("#stA_usuario").fadeOut();
    $("#stA_nacionalidad").fadeOut();
    $("#stA_Consola").fadeOut();
    $("#stA_Puntos").fadeOut();
    $("#stA_juego").fadeOut();
    $("#stA_Categoria").fadeOut();
    $("#stA_categoriabono").fadeOut();
		$("#stA_Bono").fadeIn(1000);
		break;



    case "categoriabono":
    $("#stMain").fadeOut();
    $("#stA_usuario").fadeOut();
    $("#stA_nacionalidad").fadeOut();
    $("#stA_Consola").fadeOut();
    $("#stA_Puntos").fadeOut();
    $("#stA_juego").fadeOut();
    $("#stA_Categoria").fadeOut();
    $("#stA_Bono").fadeOut();
    $("#stA_categoriabono").fadeIn(1000);
      break;
	}
}

function destroy(){
	$("#logn").load("destroySes.Controller.php");
}
