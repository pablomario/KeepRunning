<?php
	require_once('./functions.php');
	

	if( !empty($_POST['nombre']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['sexo']) && !empty($_POST['nacimiento']) ){	 
		$edad =  date("Y") - $_POST['nacimiento'];
		$documento = array("nombre"=>$_POST['nombre'],"password"=>$_POST['password'],"email"=>$_POST['email'],"sexo"=>$_POST['sexo'],"edad"=>$edad);
		if(insertarUsuario($documento)){
			echo '<h2 class="sucess"><i class="fa fa-check-circle"></i> Registrado correctamente, ya puede iniciar sesion</h2>';
		}else{
			echo '<h2 class="error"><i class="fa fa-times-circle"></i> Sucedió un error, es posible que el email ya este registrado</h2>';
		}		
	}else{
		echo '<h2 class="alert"><i class="fa fa-exclamation-triangle"></i> Por favor revise los datos</h2>';
	}


	



?>