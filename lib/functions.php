<?php

	function conexion(){
		$mongo =  new MongoClient(); //Crear objeto DB
		$db = $mongo->keeprunning; // Seleccion de base de datos
		return $db; 
	}

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

	function mostrarDatos(){
		$mongo = conexion(); //Recibo la conexion
		$coleccion = $mongo->usuarios; //Establezco con que tabla quiero trabajar
		$cursor = $coleccion->find();
		foreach($cursor as $documento){
			echo "ID Usuario: " .$documento["_id"]." Nombre: ". $documento["nombre"]." <br>";
		}
	}


	function proximasCarreras(){
		// Funcion que recoge el nombre la imagen de portada y el id de las carreras
		$mongo = conexion(); //Recibo la conexion
		$coleccion = $mongo->carreras; //Establezco con que tabla quiero trabajar
		$cursor = $coleccion->find();
		$json = [];
		$objeto = [];
		foreach($cursor as $documento){
			$objeto['id'] = $documento['_id']; 
			$objeto['nombre'] = $documento["edicion"]." ".$documento["nombre"];
			$objeto['cartel'] = $documento["imagenCartel"];
			$json = $objeto;
		}
		return $json;
	}



?>