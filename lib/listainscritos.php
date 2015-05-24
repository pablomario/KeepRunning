<?php

	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$carrera = $request->idCarrera;

	$resultado = listainscritos($carrera);
	
	if($resultado){
		echo json_encode($resultado);
	}






?>