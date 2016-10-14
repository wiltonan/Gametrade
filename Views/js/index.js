// este es el menu del index
$(document).ready(function(){

  $("#quienes_somos").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("Views/AboutUs.php");
  });

  $("#contactenos").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("Views/contactenos.php");
  });

  $("#como_se_usa").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("Views/usa.php");
  });

  $("#registrarme").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("Views/registro.php");
  });

});

// este es para hacer el inicio del index
function inicio(){
  $(".menu_index").fadeOut();
  $("#inicio_index").fadeIn();
}
// verificar comtraseña en usuario
function myFunction(){
  var x = document.getElementById("usu_pass").value;
  var y = document.getElementById("usu_pass_c").value;
  if (x==y)
  {
    document.getElementById("confirmar").innerHTML="Las contraseñas coinciden";
  }
  else
  {
    document.getElementById("confirmar").innerHTML="Las contraseñas no coinciden";
  }
}
