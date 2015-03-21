<?php
	require_once('./functions.php');
	

	if( !empty($_POST['nombre']) && !empty($_POST['password1']) && !empty($_POST['email1']) && !empty($_POST['sexo']) && !empty($_POST['nacimiento']) ){
	 
		$edad =  date("Y") - $_POST['nacimiento'];
		$documento = array("nombre"=>$_POST['nombre'],"password"=>$_POST['password1'],"email"=>$_POST['email1'],"sexo"=>$_POST['sexo'],"edad"=>$edad);
		insertarUsuario($documento);
		mostrarDatos();
	}else{
		echo "<h1>MAL2</h1>";
		echo $_POST['nombre'];
		echo $_POST['password1'];
		echo $_POST['email1'];
		echo $_POST['sexo'];                        
		echo $_POST['nacimiento'];
	}


	



?>