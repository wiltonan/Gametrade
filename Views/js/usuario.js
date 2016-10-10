$(document).ready(function(){

	$("#inicio").click(function(){
    $(".menu_usuario").load("userperfil.php");
  });

  $("#buscar").click(function(){
    $(".menu_admin").load("buscar.php");
  });

  $("#misjuegos").click(function(){
    $(".menu_admin").load(".php");
  });
});
