<html lang="es">
<head>
	<title>Keep</title>
	<meta charset="UTF-8">
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
		<div id="navcenter"> <h3> Contacto </h3> </div>
		<div id="navright"> </div>
	</nav>

	<main>
		<?php include('./includes/menu.php'); ?>
		
		<section>
		<!-- en formato cartel poner todas las carreras disponibles -->
			<article id="contacto"> 
				<h1> Contacto </h1>
				<p> Para cualquier consulta, publicidad, reclamaciones u otras acciones puede contactar con nosotros a través de la dirección de email: </p>
				<p>info@bytelchus.com</p>
			</article>
			
			
		</section>
	</main>
	<?php include('./includes/pie.php'); ?>
</body>
</html>