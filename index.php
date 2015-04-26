<html lang="es" ng-app="app">
<head>
	<title>Keep</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./js/acordeon.js"></script>
</head>
<body>
	<?php include('./includes/cabecera.php'); ?>

	<!-- <nav>
		<!-- Indicar la seccion donde estoy alguna opcion de visualizar contenido
			y poner boton de registro o si ya estas dado de alta apra apuntarse a una
			carrera
		<div id="navleft"> <h3> <i class="fa fa-bars"></i> Menu </h3> </div>
		<div id="navcenter"> <h3 class="navActual"><i class="fa fa-eye"></i> {{lugar}} </h3> </div>
		<div id="navright"> </div>
	</nav> -->


	<main>
		<?php include('./includes/menu.php'); ?>
		
		
			<div class="seccion" ng-view>
				


			</div>
		
		

	</main>
	<?php include('./includes/pie.php'); ?>

	<script type="text/javascript" src="./angular/angular.js"></script>
	<script type="text/javascript" src="./angular/angular-route.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
</body>
</html>