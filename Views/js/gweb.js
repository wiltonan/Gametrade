<!--este es el menu que esta antes de loguiarce-->

function sb_menu(vVar){
	switch(vVar){
		case "home":
			self.location.href="index.php";
		break;

		case "wor":
			self.location.href="AboutUs.php";
		break;

		case "contact":
			self.location.href="contactenos.php";
		break;

		case "usa":
			self.location.href="usa.php";
		break;

		case "contrasena":
				$("#e64ConteContra").fadeIn();
		break;

		case "regist":
			self.location.href="registro.php";
		break;
	}
}


function sbclose(v_Var){
	switch(v_Var){
		case "1":
			$("#e64Monstrar").fadeOut();
		break;

		case "2":
			$("#e64ConteContra").fadeOut();
		break;
	}
}


function ConsultUsu(){

	var ajax=fn_httpservice();
			ajax.open("POST", "../Controller/ValidarUsu.controller.php", true);
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		 usua=$("#txtUsua").val();
 		 pass=$("#txtPass").val();

 		 vsaveD="Consultar";


			var v_temp="v_action="+vsaveD+"&usua="+usua+"&pass="+pass;

				ajax.send(v_temp);

				ajax.onreadystatechange=function(){
				if (ajax.readyState==4){

					if (ajax.status == 200) {

						v_temp= ajax.responseText;

						try{
							jo_user=eval(v_temp);
						}
						catch(e){
							alert("Datos no validos");
							return;
						}
						if (jo_user['st']=="ok"){

							self.location.href="userperfil.php";
						}else{
							alert(00000);
						}
						}
					}
				}
}

function sbConsultar(v_Contr){
	switch(v_Contr){

		case "consult":
			var ajax=fn_httpservice();
			ajax.open("POST", "../Controller/ValidarUsu.controller.php", true);
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		 contra=$("#txtBuscarContra").val();

 		 vsaveC="ConsultarContra";


			var v_temp="v_action="+vsaveC+"&contra="+contra;
				ajax.send(v_temp);

				ajax.onreadystatechange=function(){
				if (ajax.readyState==4){

					if (ajax.status == 200) {

						v_temp= ajax.responseText;

						try{
							jo_user=eval(v_temp);
						}
						catch(e){
							alert("Lo sentimos, No se encuentra en nuestra base de datos, lo invitamos a Registrarse");
							$("#e64ConteContra").fadeOut();
							return;
						}
						if (jo_user['st']=="ok"){
							$("#e64NueContra").fadeIn();
							$("#txtBuscarContra").attr("disabled","disabled");
						}
						}
					}
				}
				break;

				case "guardarC":
						var ajax=fn_httpservice();
						ajax.open("POST", "../Controller/ValidarUsu.controller.php", true);
						ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		 				NumC=$("#txtBuscarContra").val();
		 				nuevaC=$("#txtNContr").val();
		 				ConfirContra=$("#txtConfirContr").val();

		 				if (nuevaC=="" || ConfirContra=="") {
		 					alert("Debes introducir tu clave en los dos campos");
		 				}

		 				if (nuevaC != ConfirContra) {

		 					alert("La contraseña no conciden, verifica e intenta de nuevo");

		 				}else{

	 		 				vsaveC="GuardarContra";

							var v_temp="v_action="+vsaveC+"&NumC="+NumC+"&ConfirContra="+ConfirContra;

							ajax.send(v_temp);

							ajax.onreadystatechange=function(){

							if (ajax.readyState==4){

								if (ajax.status == 200) {

									v_temp= ajax.responseText;

							try{
								jo_user=eval(v_temp);
							}
							catch(e){
								alert("Error al modificar la contraseña, intentalo mas tarde");
								$("#e64ConteContra").fadeOut();
								return;
							}
							if (jo_user['st']=="ok"){
								alert("contraseña modificada con exito");
								$("#e64ConteContra").fadeOut();
							}
							}
						}
					}
			}
				break;

	}
}
