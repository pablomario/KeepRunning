<?php
	session_start();
	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$carrera = $request->idCarrera;

	$resultado = inscripcion($carrera,$_SESSION['email']);
	
	if($resultado){
		echo "1";
	}else{
		echo "0";
	}

	




?>



