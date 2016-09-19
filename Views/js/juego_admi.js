<!--este es para el formulario de juego-->

function sbJueAdmi(v_var){
	switch(v_var){
		case "1":
			sbDisabled(true);
			$("#txtUsuario").focus();
			$("#liSave").fadeOut;
			$("#liCancel").fadeOut;
		break;
		case "2":
			sbDisabled(true);
			$("#txtUsuario").focus();
		break;
	}
}

function sbDisabled(vVar){
	if (vVar==false) {
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
