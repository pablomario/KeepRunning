<?php

	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$usuario = $request->usuario;

	$resultado = eliminarUsuario($usuario);
	
	if($resultado){
		echo $resultado;
	}






?>