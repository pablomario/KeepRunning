<?php
	session_start();
	require_once('./functions.php');
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$creador = $_SESSION['email'];
	$nombre = $request->nombre;
	$edicion  = $request->edicion; 
	$inscripcion = $request->inscripcion;
	$fecha = $request->fecha;
	$hora = $request->hora;
	$contactoEmail = $request->contactoEmail;
	$contactoTelef = $request->contactoTelef;
	$imagenCabecera = $request->imagenCabecera;
	$imagenCartel = $request->imagenCartel;
	$contenido = $request->contenido;   
	       
	  
	 
	     
	$resultado = nuevoEvento($creador,$nombre,$edicion,$inscripcion,$fecha,$hora,$contactoEmail,$contactoTelef,$imagenCabecera,$imagenCartel,$contenido);
	
	if($resultado){
		echo "1";
	}else{
		echo "0";
	}


?>



