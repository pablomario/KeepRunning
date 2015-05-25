
<?php
	session_start();
	if($_SESSION['authentication'] == 0){
		header('Location: #/index.php');
	}
	if($_SESSION['tipo']!=1){
		header('Location: #/index.php');
	}


?>

<section id="dashboard">

<style type="text/css">
	#cabecera_single{
		background: #03A9F4;
		background-size: cover;
		height: 200px;
	}

</style>

	<!-- en formato cartel poner todas las carreras disponibles -->
	<div id="cabecera_single"></div>

	<header id="header_single">
		<div class="contenido_single">
			<h1>{{lugar}}</h1> 
		</div>		
		<aside class="lateral_single"></aside>
	</header>

	<article id="article_single"> 
		<div class="contenido_single">			
			
			<form method="POST" id="board_newUser" ng-submit="altaCarrera()">
				<label for="nombre"> Nombre evento: </label>
				<input type="text" ng-requried="true" ng-model="nombre" placeholder="Numantobriga" required>

				<label for="edicion"> Edición: *Se recomienda formato numerico romano. </label>
				<input type="text" ng-requried="true" ng-model="edicion" placeholder="I, III , IV , XIV" required>

				<label for="inscripcion"> Inscripcion: </label>				
				<select name="inscripcion" ng-model="inscripcion">
					<option value="true">Abierta</option>
					<option value="false">Cerrada</option>
				</select>

				<label for="fecha">Fecha: *Formato dd/mm/aaaa </label>
				<input type="text" ng-requried="true" ng-model="fecha" placeholder="28/11/1989" required>

				<label for="hora">Hora: *Formato hh:mm </label>
				<input type="text" ng-requried="true" ng-model="hora" placeholder="16:30" required>

				<label for="contactoEmail">Email de contacto: </label>
				<input type="email" ng-requried="true" ng-model="contactoEmail" placeholder="organizador@empresa.com" required>

				<label for="contactoTelef">Telefono de contacto: </label>
				<input type="numeric" ng-requried="true" ng-model="contactoTelef" placeholder="666123123" required>

				<label for="imagenCabecera">Imagen de Cabecera: </label>
				<input type="text" ng-requried="true" ng-model="imagenCabecera" placeholder="htt://algo.com/imagen.jpg" required>

				<label for="imagenCartel">Imagen de Cartel: </label>
				<input type="text" ng-requried="true" ng-model="imagenCartel" placeholder="htt://algo.com/imagen.jpg" required>

				<label for="contenido">Contenido: </label>
				<textarea type="text" ng-requried="true" ng-model="contenido" cols="40" rows="10"></textarea>		

				<input class="buton big verde" type="submit" value="Nuevo Evento">
			</form>		
			
			
		</div>
		
	</article>

</section>