<?php
require('Views/nucleo.php');

if (isset($_GET['nose'])) {
	if (file_exists('Controller/' . strtolower($_GET['nose']) . '.controller.php')) {
		include('Controller/' . strtolower($_GET['nose']) . '.controller.php');
	}else {
		include('Controller/error.controller.php');
	}
}else {
	include('Controller/index.controller.php');
}
?>
