<?php
	session_start();
	require_once('./functions.php');	

	$resultado = carrerasOrganizadas($_SESSION['email']);

	echo json_encode($resultado);




?>