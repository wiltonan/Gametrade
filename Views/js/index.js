// este es el menu del index
$(document).ready(function(){

  $("#quienes_somos").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("AboutUs.php");
  });

  $("#contactenos").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("contactenos.php");
  });

  $("#como_se_usa").click(function(){
    $("#inicio_index").fadeOut();
    $(".menu_index").fadeIn();
    $(".menu_index").load("usa.php");
  });

});

// este es para hacer el inicio del index
function inicio(){
  $(".menu_index").fadeOut();
  $("#inicio_index").fadeIn();
}
