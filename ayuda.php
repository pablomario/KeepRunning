<html lang="es">
<head>
	<meta charset="utf-8">
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
		<div id="navcenter"> <h3> Ayuda </h3> </div>
		<div id="navright"> </div>
	</nav>

	<main>
		<?php include('./includes/menu.php'); ?>

		<section>

			<article id="ayuda" class="largo">
				<h1> Ayuda </h1>

				<h2>¿Que es KeepRunning?</h2>
				<p>
					Somos una plataforma cercana, creada por y para deportistas, sabemos que te gusta correr y que no dejas escapar<br>
					ningun evento, por eso hemos querido unificar en una misma plataforma el maximo numero de <br>
					carreras populares. <br>
				</p>
				<br/>

				<h2>¿Que ofrecemos?</h2>
				<p>
					Si eres corredor te damos la oportunidad de apuntarte y llevar el control de todas las carreras en</br>
					las que participas desde un mismo lugar
				</p>
				<p>
					Si eres un organizador, puedes crear y gestionar la totalidad de tus carreras populares, </br>
					en la seccion "Contacto" tienes los pasos a realizar para obtener una prueba gratuita de la plataforma
				</p>
				<br/>

				<h2>Uso de las últimas Tecnologias</h2>
				<p>
					Se ha prestado en especial interes en usar las últimas tecnologías para obtener el maximo rendimiento
					y garantizar la mayor experiencia al usuario final.
				</p>
				<br/>

				<h1>FAQ´s</h1>
				<br/>
				<div class="menujq">
					<ul>
						<li><h3><i class="fa fa-sort-desc"> </i> ¿Que Base de Datos usa? - MongoDB noSQL</h3>
							<ul>
								<li>
									<img src="./imgs/vendors/mongodb.png"/>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
								</li>
							</ul>
						</li>
						<li><h3><i class="fa fa-sort-desc"> </i> ¿Porque usa un Framework FrontEnd? - AngularJS</h3>
							<ul>
								<li>
									<img src="./imgs/vendors/angularLogo.png"/>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
								</li>
							</ul>
						</li>
						<li><h3><i class="fa fa-sort-desc"> </i> Servidor JSON - Node.js</h3>
							<ul>
								<li>
									<img src="./imgs/vendors/nodejs.png"/>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
								</li>
							</ul>
						</li>
						<li><h3><i class="fa fa-sort-desc"></i> PHP5.6 y MongoDB </h3>
							<ul>
								<li>
									<p>Respuesta al menu de ayuda y bla bla bla bla bla bla</p>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</article>
		</section>
	</main>
	<?php include('./includes/pie.php'); ?>
</body>
</html>