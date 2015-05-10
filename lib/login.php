<?php

	require_once('./functions.php');

	if(!empty($_POST['email']) && !empty($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != "" ){
		
		if( login($_POST['email'], $_POST['password']) ){
			header('Location: ../#/carreras.php');
		}else{
			header('Location: ../#/portada.php');
		}
	}else{
		header('Location: ../#/portada.php');
	}




?>