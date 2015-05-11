<?php

	require_once('./functions.php');

	if(!empty($_POST['email']) && !empty($_POST['password']) && $_POST['email'] != "" && $_POST['password'] != "" ){
		
		if( login($_POST['email'], $_POST['password']) ){
			echo "1";
		}else{
			echo "0";
		}
	}else{
		echo "0";
	}




?>