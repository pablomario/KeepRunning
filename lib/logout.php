<?php
	session_start();
	$_SESSION['authentication'] = 0;
	$_SESSION['nombre'] = "";
	$_SESSION['email'] = "";
	session_destroy();
	header('Location: ../#/portada.php');
?>