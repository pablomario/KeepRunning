<?php

	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$operacion = $request->operacion;
	$carrera = $request->idCarrera;


	$resultado = cambioEstadoCarrera($operacion,$carrera);


	if($resultado){
		echo 1;
	}else{
		echo 0;
	}






?>