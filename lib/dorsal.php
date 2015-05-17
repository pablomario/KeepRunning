<?php
	


	$carrera = '553bdcd42f51ad9941661b13';
	$usuario = 'caca@caca.caca';

	$caca = inscripcion($carrera,$usuario);

	if($caca){
		echo "BIEN";
	}else{
		echo "ERROR";
	}


	function conexion(){
		$mongo =  new MongoClient(); //Crear objeto DB
		$db = $mongo->keeprunning; // Seleccion de base de datos
		return $db; 
	}

	function maxDorsal($idCarrera){
		$mongo = conexion();
		$coleccion = $mongo->inscripciones;
		$item = $coleccion ->find(array('carrera' => $idCarrera));  
		$maxDorsal = 0;

		foreach($item as $documento){		
			$dorsal = $documento['dorsal'];
			if($dorsal >= $maxDorsal ) $maxDorsal = $dorsal;
		}	

		if($maxDorsal==null){
			$maxDorsal = 0;
		}

		return ($maxDorsal+1);
	}



	function inscripcion($idCarrera, $usuario){
		try{
			$mongo = conexion();
			$coleccion = $mongo->inscripciones;

			/* Obtener Dorsal*/
			$dorsalAsingado = maxDorsal($idCarrera);

			/* Creacion objeto JSON de la incripscion */
			$documento = array("usuario"=>$usuario,"carrera"=>$idCarrera,"dorsal"=>$dorsalAsingado);
			$coleccion->insert($documento);
			return true;
		}catch(MongoCursorException $e){
			return false;
		}
		
	}


	






?>
