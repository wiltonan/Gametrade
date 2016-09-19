<?php
//include("controllers/config.php");
if(isset($_GET['url'])){

	$v_params=explode("/", $_GET['url']);
	if(count($v_params)==1){$v_params[1]="0";}
	if(count($v_params)==2){$v_params[2]="0";}
}else{
	$v_params=explode("/", "index/0/0");
}

switch($v_params[0]){

	/*case "admin":
		header("Location: http://appvirtualschool.com/views/admin.php?u=".$v_params[0]."&c=".$v_params[1]);
		break;*/
	case "index":
		header("Location: http://localhost:8000/Aplicacion_gametrade/Views/");
		break;
	/*case "institucional":
		header("Location: http://appvirtualschool.com/views/institutional.php?u=".$v_params[0]."&c=".$v_params[1]);
		break;*/
	case "acudiente":
		//header("Location: http://appvirtualschool.com/views/admin.php?u=".$v_params[0]."&c=".$v_params[1]);
		break;


}
?>
