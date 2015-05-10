<?php
	session_start();
	require_once('./lib/functions.php');
?>

<html lang="es" ng-app="app">
	<!-- Header --> 
	<?php include('./includes/header.php'); ?>

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
			
			<div class="seccion" ng-view> </div>		

		</main>

		<?php include('./includes/pie.php'); ?>
		<?php include('./includes/loginModal.php'); ?>

		<script type="text/javascript" src="./angular/angular.js"></script>
		<script type="text/javascript" src="./angular/angular-route.js"></script>
		<script type="text/javascript" src="./js/app.js"></script>



		<!-- Login Modal -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./js/jquery.remodal.js"></script>

		<!-- Events -->
		<script>
		  $(document).on("open", ".remodal", function () {
		    console.log("open");
		  });

		  $(document).on("opened", ".remodal", function () {
		    console.log("opened");
		  });

		  $(document).on("close", ".remodal", function (e) {
		    console.log('close' + (e.reason ? ", reason: " + e.reason : ''));
		  });

		  $(document).on("closed", ".remodal", function (e) {
		    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
		  });

		  $(document).on("confirm", ".remodal", function () {
		    console.log("confirm");
		  });

		  $(document).on("cancel", ".remodal", function () {
		    console.log("cancel");
		  });

		//  You can open or close it like this:
		//  $(function () {
		//    var inst = $.remodal.lookup[$("[data-remodal-id=modal]"").data("remodal")];
		//    inst.open();
		//    inst.close();
		//  });

		  //  Or init in this way:
		  var inst = $("[data-remodal-id=modal2]").remodal();
		  //  inst.open();
		</script>


	</body>
</html>