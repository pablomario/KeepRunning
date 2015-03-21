<html lang="es">
<head>
	<title>Keep</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./vendors/modernizr.custom.82262"></script>
	<script type="text/javascript" src="./js/acordeon.js"></script>
</head>
<body>
	<?php include('./includes/cabecera.php'); ?>
	<nav>
		<!-- Indicar la seccion donde estoy alguna opcion de visualizar contenido
			y poner boton de registro o si ya estas dado de alta apra apuntarse a una
			carrera -->
		<div id="navleft"> <h3> <i class="fa fa-bars"></i> Menu </h3> </div>
		<div id="navcenter"> <h3> Nuevo Usuario </h3> </div>
		<div id="navright"> </div>
	</nav>

	<main>
		<?php include('./includes/menu.php'); ?>
		
		<section>
		<!-- en formato cartel poner todas las carreras disponibles -->
			<article id="nuevoUsuario"> 
				<h1> Nuevo Usuario </h1>
				<p> Actualmente el servio solo esta disponible para Alta de nuevos usuarios residentes en España.</p>
				<br/>
				<br/>
				<form method="POST" action="./lib/nuevoUsuario.php">
					<label for="nombre"> Nombre Completo: </label>
					<input type="text" name="nombre" placeholder="Ej. Pablo Garcia Perez" required>

					<label for="email1"> Email: </label>
					<input type="email" name="email1" placeholder="alguien@ejemplo.com" required>

					<label for="email2"> Repita Email: </label>
					<input type="email" name="email2" placeholder="alguien@ejemplo.com" required>
					
					<label for="sexo"> Sexo: </label>
					<input name="sexo" value="Femenino" type="radio">Femenino<br/>
					<input name="sexo" value="Masculino" type="radio">Masculino<br/>

					<label for="nacimiento">Año de Nacimiento</label>
					<input type="number" name="nacimiento" patter="[0-9]{4,4}" value="1980" required>

					<label for="password1"> Contraseña: pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" </label>
					<input type="password" name="password1" placeholder="**************" required>

					<label for="password2"> Repita Contraseña: </label>
					<input type="password" name="password2" placeholder="**************" required>

					<input type="submit" value="Registrarme">
				</form>
			</article>
			
			
		</section>
	</main>
	<?php include('./includes/pie.php'); ?>
</body>
</html>