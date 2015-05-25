

<section id="section_single" ng-controller="organizadores">

<style type="text/css">
	#cabecera_single{
		background: url(./imgs/portada/learner.jpg) center center;
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
			<p> Si eres Organizador y quieres probar KeepRunning de manera <em>totalmente gratuita</em> sólo tienes que introducir 
				tus datos y en menos de 24 horas nos pondremos en contancto contigo. </p>
			<p> Si eres Organizador y deseas cambiar los datos de algún evento organizado rellena el formulario con la opcion adecuada y 
			los motivos para que en menos de 24 horas nos pongamos en contancto contigo. </p>
			<h2>Prueba Gratuita</h2>
			<form method="POST" ng-submit="emailOrganizacion()">
				<label for="nombre"> Nombre Completo: </label>
				<input type="text" name="nombre" ng-model="nombre" placeholder="Ej. Pablo Garcia Perez" required>

				<label for="organizacion"> Organizacion: </label>
				<input type="text" name="organizacion" ng-model="asociacion" placeholder="Asociacion Parchis" required>

				<label for="email"> Email: </label>
				<input type="email" name="email" ng-model="email" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

				<label for="telefono"> Telefono: </label>
				<input type="tel" name="telefono" ng-model="telefono" placeholder="555123123" required>

				<label for="comentario"> Comentarios: </label>
				<textarea type="text" name="comentario" ng-model="comentario" cols="40" rows="5" required></textarea>
				
				<input type="submit" value="Registrarme">
			</form>			
		</div>
	</article>

</section>