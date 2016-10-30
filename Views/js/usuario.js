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
});


function inicio(){
	$(".menu_usuario").fadeOut();
	$("#dv_index").fadeIn();
}
