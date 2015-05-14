<?php
	include('./functions.php');
	header('Content-Type: application/json; charset=utf-8');
	$json = datosCarreras();
	echo json_encode($json);
?>
