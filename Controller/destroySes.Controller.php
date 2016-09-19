<!--este es para cerrar cession-->

<?php
if(isset($_SESSION)){
	session_destroy();
	header("location:admin.php");
}
?>
