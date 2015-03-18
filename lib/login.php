<?php

	if(!empty($_POST['email']) && !empty($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != "" ){
		//Validar USUARIO
		header('Location: ../app/dashboard.php');
	}else{
		header('Location: ../index.php');
	}

?>