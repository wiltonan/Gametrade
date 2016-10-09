// este es el menu
$(document).ready(function(){

  $("#usuario").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("admin_usuario.php");
  });

  $("#pais").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("pais.php");
  });

  $("#ciudad").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("ciudad.php");
  });

  $("#consola").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("admin_consola.php");
  });

  $("#punto").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("puntos.php");
  });

  $("#cat_juego").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("Categoria_jue.php");
  });

  $("#juego").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("juego.php");
  });

  $("#bono").click(function(){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("bono.php");
  });
});

// este es para hacer el inicio de admin
function inicio(){
  $(".menu_admin").fadeOut();
  $("#inicio_principal").fadeIn();
}

// este es para destruir session
function destroy(){
  location.href="../Controller/login.controller.php?action=session"
}
