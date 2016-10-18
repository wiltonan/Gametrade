// // este es el menu
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

  url();
});


function url(){
  var URLhas = window.location.hash;

  if(URLhas=="#/usuario"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("admin_usuario.php");
  }
  //
  if(URLhas=="#/pais"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("pais.php");
  }

  if(URLhas=="#/ciudad"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("ciudad.php");
  }
  //
  if(URLhas=="#/consolas"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("admin_consola.php");
  }
  //
  if(URLhas=="#/puntos"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("puntos.php");
  }

    if(URLhas=="#/categoria_juegos"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("categoria_jue.php");
  }
  //
  if(URLhas=="#/juego"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("juego.php");
  }

  if(URLhas=="#/bono"){
    $("#inicio_principal").fadeOut();
    $(".menu_admin").fadeIn();
    $(".menu_admin").load("bono.php");
  }
}


// este es para hacer el inicio de admin
function inicio(){
  $(".menu_admin").fadeOut();
  $("#inicio_principal").fadeIn();
}

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

// este es para destruir session
function destroy(){
  location.href="../Controller/login.controller.php?action=session"
}

function modificar(){
  swal("!Bien","Se modifico con exito!","success");
}
