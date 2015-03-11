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
		<div id="navcenter"> <h3> Organizadores </h3> </div>
		<div id="navright"> </div>
	</nav>

	<main>
		<?php include('./includes/menu.php'); ?>
		
		<section>
		<!-- en formato cartel poner todas las carreras disponibles -->
			<article id="nuevoUsuario"> 
				<h1> Organizadores </h1>
				<p> Si eres Organizador y quieres probar KeepRunning de manera <em>totalmente gratuita</em> <br>
				sólo tienes que introducir tus datos y en menos de 24 horas nos pondremos en contancto contigo. </p>
				<br/>
				<br/>
				<form method="POST" action="">
					<label for="nombre"> Nombre Completo: </label>
					<input type="text" name="nombre" placeholder="Ej. Pablo Garcia Perez">
					<label for="organizacion"> Organizacion: </label>
					<input type="text" name="organizacion" placeholder="Asociacion Parchis">
					<label for="email"> Email: </label>
					<input type="email" name="email" placeholder="alguien@ejemplo.com">
					<label for="telefono"> Telefono: </label>
					<input type="tel" name="telefono" placeholder="alguien@ejemplo.com">
					<label for="comentario"> Comentarios: </label>
					<textarea type="text" name="comentario" cols="40" rows="5"></textarea>
					
					<input type="submit" value="Registrarme">
				</form>
			</article>
			
			
		</section>
	</main>
	<?php include('./includes/pie.php'); ?>
</body>
</html>