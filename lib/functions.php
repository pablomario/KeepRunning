<?php

	/**
	 * [conexion description]
	 * Conexion a base de datos MongoDB
	 * @return conexion
	 */
	function conexion(){
		$mongo =  new MongoClient(); //Crear objeto DB
		$db = $mongo->keeprunning; // Seleccion de base de datos
		return $db; 
	}


	/************************** LOGIN *************************/

	/**
	 * [login description]
	 * Funcion para Iniciar Sesion en el sistema
	 * @param  [string] $email    email del usuario
	 * @param  [string] $password contraseña del usuario
	 * @return [boolean]   		  	        
	 */
	function login($email, $password){
		try{
			$mongo = conexion();
			$coleccion = $mongo->usuarios;
			$userDatabaseFind = $coleccion->find(array('email' => $email)); 				
			//Recorremos el resultado para obtener los valores
			foreach($userDatabaseFind as $documento) {
				$storedUserName     = $documento['nombre'];
				$storedUserEmail    = $documento['email'];
				$storedUserPassword = $documento['password'];
				$storedUserTipo     = $documento['tipo'];
				$storeUserAvatar    = $documento['avatar'];
				$storeUserSexo      = $documento['sexo'];
				$storeUserEdad      = $documento['edad'];
			}

			if($email == $storedUserEmail && md5($password) == $storedUserPassword){ 
				session_start();
					$_SESSION['authentication'] = 1;
					$_SESSION['nombre']         = $storedUserName;
					$_SESSION['email']          = $storedUserEmail;
					$_SESSION['tipo']           = $storedUserTipo;
					$_SESSION['avatar']         = $storeUserAvatar;
					$_SESSION['sexo']           = $storeUserSexo; 
					$_SESSION['edad']           = $storeUserEdad;  
				return true;
			}else{				
				return false;
			}
		}catch(MongoCursorException $e){
			return false;
		}			
	}




	/**
	 * [insertarUsuario description]
	 * Guardar Usuario en MongoDB
	 * @param  json $documento objeto que se almacena
	 * @return boolean		   parametro para saber si se ha realizado con exito
	 */
	function insertarUsuario($documento){
		try{
			$mongo = conexion();
			$coleccion = $mongo->usuarios; // Decimos a que tabla queremos acceder
			$coleccion->insert($documento);
			return true;
		}catch(MongoCursorException $e){
			return false;
		}		
	}


	/**
	 * [mostrarDatos description]
	 * [TEST]
	 * @return [type] [description]
	 */
	function mostrarDatos(){
		$mongo = conexion(); //Recibo la conexion
		$coleccion = $mongo->usuarios; //Establezco con que tabla quiero trabajar
		$cursor = $coleccion->find();
		foreach($cursor as $documento){
			echo "ID Usuario: " .$documento["_id"]." Nombre: ". $documento["nombre"]." <br>";
		}
	}



	/** [ FUNCIONES PARA PROXIMAS CARERAS y SINGLE ] **/

	/**
	 * [proximasCarreras description]
	 * Obtener todos los datos de las carreras que existen el sistema actualmente
	 * @return json 
	 */
	function proximasCarreras(){
		// Funcion que recoge el nombre la imagen de portada y el id de las carreras
		$mongo = conexion(); //Recibo la conexion
		$coleccion = $mongo->carreras; //Establezco con que tabla quiero trabajar
		$cursor = $coleccion->find();
		$json = [];
		$objeto = [];
		foreach($cursor as $documento){
			$objeto['id']           = (string)$documento['_id']; 
			$objeto['nombre']       = $documento["edicion"]." ".$documento["nombre"];
			$objeto['imagenCartel'] = $documento["imagenCartel"]; 
			$json[]                 = $objeto;
		}
		return $json;
	}



	/**
	 * [datosCarreraUnica description]
	 * Obtener objeto json con los datos de cada carrera
	 * @param  entero $identificador
	 * @return json                
	 */	

	function datosCarreras(){ 
		$mongo = conexion(); 
		$coleccion = $mongo->carreras;		
		//$fruitQuery = array("_id" => "551c5430d0d795443a42a2d8"); //Query
		//$identificador = "551c5430d0d795443a42a2d8";
		$item = $coleccion ->find();
		$json = [];
		$objeto = [];
		foreach($item as $documento){
			$objeto['nombre']         = $documento['nombre'];
			$objeto['edicion']        = $documento['edicion'];
			$objeto['inscripcion']    = $documento['inscripcion'];
			$objeto['fecha']          = $documento['fecha'];
			$objeto['hora']           = $documento['hora'];
			$objeto['descripcion']    = $documento['descripcion'];
			//$objeto['video']          = $documento['video'];
			//$objeto['localizacion']   = $documento['localizacion'];
			$objeto['contactoEmail']  = $documento['contactoEmail'];
			$objeto['contactoTelef']  = $documento['contactoTelef'];
			$objeto['imagenCabecera'] = $documento['imagenCabecera'];
			$objeto['imagenCartel']   = $documento['imagenCartel'];
			$json[]                   = $objeto;
		}
		return json_encode($json);
	}


		 	
	

	/**
	 * [datosCarreraUnica description]
	 * Obtener objeto json con los datos de cada carrera
	 * @param  entero $identificador
	 * @return json                
	 */	
	function datosCarreraUnica($identificador){ 
		$mongo = conexion(); 
		$coleccion = $mongo->carreras;		
		//$fruitQuery = array("_id" => "551c5430d0d795443a42a2d8"); //Query
		//$identificador = "551c5430d0d795443a42a2d8";
		$item = $coleccion ->find(array('_id' => new MongoId($identificador)));
		$json = [];
		$objeto = [];
		foreach($item as $documento){
			$objeto['id']             = $identificador;
			$objeto['nombre']         = $documento['nombre'];
			$objeto['edicion']        = $documento['edicion'];
			$objeto['inscripcion']    = $documento['inscripcion'];
			$objeto['fecha']          = $documento['fecha'];
			$objeto['hora']           = $documento['hora'];
			$objeto['descripcion']    = $documento['descripcion'];
			//$objeto['video']          = $documento['video'];
			//$objeto['localizacion']   = $documento['localizacion'];
			$objeto['contactoEmail']  = $documento['contactoEmail'];
			$objeto['contactoTelef']  = $documento['contactoTelef'];
			$objeto['imagenCabecera'] = $documento['imagenCabecera'];
			$objeto['imagenCartel']   = $documento['imagenCartel'];
			$json[]                   = $objeto;
		}
		return $json;
	}



	/*
	===========================================================
			    FUNCIONES PARA LA INSCRIPCION
	===========================================================
	*/


	/**
	 * [estaInscrito description]
	 * Saber si un usuario ya esta inscrito, si es asi retorna el numero de dorsal.
	 * @param  [type] $idCarrera [description]
	 * @param  [type] $email     [description]
	 * @return [type]            [description]
	 */
	function estaInscrito($idCarrera,$email){
		$mongo = conexion();
		$coleccion = $mongo->inscripciones;
		$item = $coleccion ->find(array('carrera' => $idCarrera,'usuario' => $email));  
		
		foreach($item as $documento){		
			$dorsal = $documento['dorsal'];				
		}

		if($dorsal == null){
			// No esta inscrito 
			return -1;
		}else{
			// Ya esta inscrito y tiene dorsal
			return ($dorsal+0);
		}		
	}



	/**
	 * [maxDorsal description]
	 * Funcion que regresa el dorsal que se asignara al sigueinte inscrito. 
	 * @param  [type] $idCarrera [description]
	 * @return [type]            [description]
	 */
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


	/**
	 * [inscripcion description]
	 * Funcion para inscribir un nuevo participante.
	 * @param  [type] $idCarrera [description]
	 * @param  [type] $usuario   [description]
	 * @return [type]            [description]
	 */
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


	/*
	===========================================================
			    FUNCIONES PARA DASHBOARD USUARIO
	===========================================================
	*/

	/**
	 * [inscripcionDashboard description]
	 * Funcion para obtener un listado de las carreras en las que participa
	 * un usuario.
	 * @param  [type] $usuario [description]
	 * @return [type]          [description]
	 */
	function inscripcionDashboard($usuario){
		try{
			$mongo = conexion();
			$coleccion = $mongo->inscripciones;	
			$coleccionRace = $mongo->carreras;				

			$json = [];
			$objeto = [];

			$item = $coleccion->find(array("usuario"=>$usuario));
			foreach($item as $documento){
				$identificador     = $documento['carrera'];
				$objeto['carrera'] = $documento['carrera'];
				$objeto['dorsal']  = $documento['dorsal'];			

				$itemRace = $coleccionRace ->find(array('_id' => new MongoId($identificador)));				
				foreach($itemRace as $documentoRace){
					$objeto['carreraNombre']  = $documentoRace['nombre'];
					$objeto['carreraEdicion'] = $documentoRace['edicion'];
					$objeto['carreraFecha']   = $documentoRace['fecha'];
				}
				$json[] = $objeto;
			}/* Fin first foreach */

			return $json;

		}catch(MongoCursorException $e){
			return false;
		}
	}








?>