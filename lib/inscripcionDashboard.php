<?php
	session_start();
	require_once('./functions.php');	

	$resultado = inscripcionDashboard($_SESSION['email']);

	echo json_encode($resultado);




?>