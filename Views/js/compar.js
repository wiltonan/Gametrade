// comprar.php?cmp=".$compr["jue_cod"]."

function comparar(){
	
	codigo=$("#codigpinputPunnt").val();
	puntoUsuario=$("#txtpuntMenu").val();
	puntoJueg=$("#inputPunnt").val();
	alert(puntoJueg);
	 if (puntoJueg>puntoUsuario) {
	 	
	 	self.location.href="comprar.php?cmp="+codigo+"";
	 }else{
	 	//llevar a poner juego
	 	self.location.href="../Controller/juego_usuario.controller.php?cmps="+codigo+"&action=punt"
	 	
	 }	
}
