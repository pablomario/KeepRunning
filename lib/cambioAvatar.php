<?php
	session_start();
	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);	
	$nuevoAvatar = $request->avatar;

	$usuario = $_SESSION['email'];

	$resultado = cambioAvatar($usuario,$nuevoAvatar);
	
	if($resultado){
		echo $resultado;
	}

?>