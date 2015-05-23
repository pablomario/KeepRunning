<?php
	session_start();
	require_once('./lib/functions.php');
?>

<html lang="es" ng-app="app">
	<!-- Header --> 
	<?php include('./includes/header.php'); ?>

	<body>
		<?php include('./includes/cabecera.php'); ?>

		
		<main>
			<?php include('./includes/menu.php'); ?>
			
			<div class="seccion"><ng-view></ng-view></div>		

		</main>

		<?php include('./includes/pie.php'); ?>

		<script type="text/javascript" src="./angular/angular.js"></script>
		<script type="text/javascript" src="./angular/angular-route.js"></script>
		<script type="text/javascript" src="./js/app.js"></script>	
		<script type="text/javascript" src="./js/functions.js"></script>
	</body>
</html>