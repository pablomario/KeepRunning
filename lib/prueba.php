<?php

	function conexion(){
		$mongo =  new MongoClient(); //Crear objeto DB
		$db = $mongo->keeprunning; // Seleccion de base de datos
		return $db; 
	}

	function insertarUsuario(){
		$mongo = conexion();
		$coleccion = $mongo->usuarios; // Decimos a que tabla queremos acceder
		$documento = array("nombre"=>"php","password"=>"12345","email"=>"asd@asd.com",
			"sexo"=>"Femenino","edad"=>"23");
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

	mostrarDatos();



?>