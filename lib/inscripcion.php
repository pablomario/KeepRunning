<?php
	session_start();
	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$carrera = $request->idCarrera;

	inscripcionCarerra($carrera,$_SESSION['email']);
	

	echo $carrera."caca";




?>



