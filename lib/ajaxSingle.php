<?php
	include('./functions.php');
	header('Content-Type: application/json; charset=utf-8');
	$identificador = $_GET['id'];
	$json = datosCarreraUnica($identificador);
	echo json_encode($json);
?>
