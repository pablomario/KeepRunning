<?php

	function conexion(){
		$mongo =  new MongoClient(); //Crear objeto DB
		$db = $mongo->keeprunning; // Seleccion de base de datos
		return $db; 
	}

	function insertarUsuario($documento){
		$mongo = conexion();
		$coleccion = $mongo->usuarios; // Decimos a que tabla queremos acceder
		$coleccion->insert($documento);
	}

	function mostrarDatos(){
		$mongo = conexion(); //Recivo la conexion
		$coleccion = $mongo->usuarios; //Establezco con que tabla quiero trabajar
		$cursor = $coleccion->find();
		foreach($cursor as $documento){
			echo "ID Usuario: " .$documento["_id"]." Nombre: ". $documento["nombre"]." <br>";
		}
	}




?>