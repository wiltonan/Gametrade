$(document).ready(function(){
 
  
	$("#inicio").click(function(){
    $("#dv_index").load("conte_usuario.php");
  });

  $("#buscar").click(function(){
  	$("#dv_index").fadeOut();
	$(".menu_usuario").fadeIn();
    $(".menu_usuario").load("buscar.php");
  });

  $("#misjuegos").click(function(){
  	$("#dv_index").fadeOut();
	$(".menu_usuario").fadeIn();
    $(".menu_usuario").load("misjuegos.php");
  });



$("#comprarjuego").click(function(){
    $("#dv_index").fadeOut();
  $(".menu_usuario").fadeIn();
    $(".menu_usuario").load("comprarjuego.php");
  });
});

function inicio(){
	$(".menu_usuario").fadeOut();
	$("#dv_index").fadeIn();
}


function destroy1(){
  location.href="../Controller/usuario.controller.php?action=session1"
}