<?php
	session_start();
	require_once('./functions.php');
	$resultado = listadoUsuariosAdmin();
	echo json_encode($resultado);
?>