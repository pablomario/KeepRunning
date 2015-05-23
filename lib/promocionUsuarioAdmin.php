<?php

	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$operacion = $request->operacion;
	$usuario = $request->usuario;

	$resultado = promocionUsuarioAdmin($operacion,$usuario);
	
	if($resultado){
		echo $resultado;
	}






?>