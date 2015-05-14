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
			}

			if($email == $storedUserEmail && $password == $storedUserPassword){ 
				session_start();
					$_SESSION['authentication'] = 1;
					$_SESSION['nombre'] = $storedUserName;
					$_SESSION['email'] = $storedUserEmail;
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
			$objeto['id']             = $identificador;
			$objeto['nombre']         = $documento['nombre'];
			$objeto['edicion']        = $documento['edicion'];
			$objeto['inscripcion']    = $documento['inscripcion'];
			$objeto['fecha']          = $documento['fecha'];
			$objeto['hora']           = $documento['hora'];
			$objeto['descripcion']    = $documento['descripcion'];
			$objeto['video']          = $documento['video'];
			$objeto['localizacion']   = $documento['localizacion'];
			$objeto['contactoEmail']  = $documento['contactoEmail'];
			$objeto['contactoTelef']  = $documento['contactoTelef'];
			$objeto['imagenCabecera'] = $documento['imagenCabecera'];
			$objeto['imagenCartel']   = $documento['imagenCartel'];
			$json[]                   = $objeto;
		}
		return $json;
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
			$objeto['video']          = $documento['video'];
			$objeto['localizacion']   = $documento['localizacion'];
			$objeto['contactoEmail']  = $documento['contactoEmail'];
			$objeto['contactoTelef']  = $documento['contactoTelef'];
			$objeto['imagenCabecera'] = $documento['imagenCabecera'];
			$objeto['imagenCartel']   = $documento['imagenCartel'];
			$json[]                   = $objeto;
		}
		return $json;
	}





?>