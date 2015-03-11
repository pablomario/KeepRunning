<html lang="es">
<head>
	<title>Keep</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./js/acordeon.js"></script>
</head>
<body>
	<?php include('./includes/cabecera.php'); ?>
	<nav>
		<!-- Indicar la seccion donde estoy alguna opcion de visualizar contenido
			y poner boton de registro o si ya estas dado de alta apra apuntarse a una
			carrera -->
		<div id="navleft"> <h3> <i class="fa fa-bars"></i> Menu </h3> </div>
		<div id="navcenter"> <h3> Portada </h3> </div>
		<div id="navright"> </div>
	</nav>

	<main>
		<?php include('./includes/menu.php'); ?>
		
		<section>
		<!-- en formato cartel poner todas las carreras disponibles -->
		<?php 
			for($i = 0; $i < 14; $i++){
				echo '<article class="cartel"> <img src="./carreras/cartel.png"> <h4> I Carrera del Torrezno </h4> <p>Inscripcion Cerrada</p></article>';
			}
		?>
			
			
		</section>
	</main>
	<?php include('./includes/pie.php'); ?>
</body>
</html>