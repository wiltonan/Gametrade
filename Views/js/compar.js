// comprar.php?cmp=".$compr["jue_cod"]."

function comparar(){
	
	codigo=$("#codigpinputPunnt").val();
	punto=$("#txtpuntMenu").val();
	puntoJueg=$("#inputPunnt").val();
	alert(punto);
	alert(puntoJueg);
	 if (puntoJueg>punto) {
	 	self.location.href="comprar.php?cmp="+codigo+"";
	 }else{
	 	//llevar a poner juego
	 	self.location.href="../Controller/juego_usuario.controller.php?cmps="+codigo+"&action=punt"
	 }	
}
