<?php
	session_start();
	require_once('./functions.php');
	
	$usuario = $_SESSION['email']; 

	$resultado = eliminarUsuario($usuario);
	
	if($resultado){
		header('Location: logout.php');
	}






?>