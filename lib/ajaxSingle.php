<?php
	include('./functions.php');
	$identificador = $_GET['id'];
	$json = datosCarreraUnica($identificador);
	echo json_encode($json);
?>
