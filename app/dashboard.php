<?php 
	session_start();
	require_once('../lib/functions.php');

 ?>



<html lang="es">
<head>
	<title>Keep</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	
</head>
<body>
	<?php include('../includes/cabecera.php'); ?>
		<?php
			echo "<h1> HOLA: ".$_SESSION['nombre']." </h1>";


		?>
	
	<?php include('../includes/pie.php'); ?>
</body>
</html>