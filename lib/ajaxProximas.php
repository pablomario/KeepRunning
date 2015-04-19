<?php
	include('./functions.php');
	$json = proximasCarreras();
	echo json_encode($json);
?>
