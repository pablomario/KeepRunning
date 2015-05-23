<?php
	session_start();
	require_once('./functions.php');
	$resultado = carrerasOrganizadasAdmin();
	echo json_encode($resultado);
?>