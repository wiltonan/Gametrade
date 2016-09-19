<!-registrar usuario--->

$(document).ready(function() {

});

function enviar(){

var ajax=fn_httpservice();
			ajax.open("POST", "../Controller/registro.controller.php", true);
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		 codigoRol=2;
		 estado=1;
		 tipDocument=$("#cbTipDocum").val();
 		 numDocum=$("#numDocument").val();
 		 nombre=$("#nameRegist").val();
 		 apellido=$("#lastRegist").val();
 		 nacimiento=$("#bornRegist").val();

 		 telefono=$("#phoneRegist").val();
 		 celphone=$("#CelphoneRegist").val();
 		 direccion=$("#addressRegist").val();
 		 ciudad=$("#cbCiudad").val();
 		 correo=$("#emailRegist").val();

 		 usuario=$("#nickRegist").val();
 		 contrasena=$("#passRegist").val();
 		// photo=$("#photoRegist").val();

 		 vsaveD="guardar";


			var v_temp="v_action="+vsaveD+"&codigoRol="+codigoRol+"&estado="+estado+"&tipDocument="+tipDocument+"&numDocum="+numDocum+"&nombre="+nombre+"&apellido="+apellido+"&nacimiento="+nacimiento+"&telefono="+telefono+"&celphone="+celphone+"&direccion="+direccion+"&ciudad="+ciudad+"&correo="+correo+"&usuario="+usuario+"&contrasena="+contrasena;

				ajax.send(v_temp);

				ajax.onreadystatechange=function(){
				if (ajax.readyState==4){

					if (ajax.status == 200) {

						v_temp= ajax.responseText;

						try{
							jo_user=eval(v_temp);
						}
						catch(e){
							alert("Se ha presentado un error en la lectura de los datos");
							return;
						}
						if (jo_user['st']=="ok"){

							self.location.href="index.php";
						}
						}
					}
				}
}
