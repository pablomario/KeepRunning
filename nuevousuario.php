

<section id="section_single" ng-controller="nuevousuario"> 

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
			<p> Actualmente el servio solo esta disponible para Alta de nuevos usuarios residentes en España.</p>
			<div id="resultado"></div>
			<h2>Registro Gratuito</h2> 
			<form method="POST" id="board_newUser" >
				<label for="nombre"> Nombre Completo: </label>
				<input id="board_newUser_nombre" type="text" ng-requried="true" name="nombre" placeholder="Ej. Pablo Garcia Perez" required>

				<label for="email1"> Email: </label>
				<input id="board_newUser_email" type="email" ng-requried="true" name="email1" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>

				<label for="email2"> Repita Email: </label>
				<input id="board_newUser_email1" type="email" ng-requried="true" name="email2" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
				
				<label for="sexo"> Sexo: </label>				
				<select name="sexo" id="board_newUser_sexo">
					<option value="Femenino">Femenino</option>
					<option value="Masculino">Masculino</option>
					<option value="Otro">Otro</option>
				</select> <br/> <br/>

				<label for="nacimiento">Año de Nacimiento</label>
				<input id="board_newUser_nacimiento" type="number" ng-requried="true" name="nacimiento" patter="[0-9]{4,4}" value="1980" required>

				<label for="password1"> Contraseña:</label>
				<input id="board_newUser_password" type="password" ng-requried="true" name="password1" placeholder="**************" required>

				<label for="password2"> Repita Contraseña: </label>
				<input id="board_newUser_password1" type="password" ng-requried="true" name="password2" placeholder="**************" required>

				<input type="submit" value="Registrarme">
			</form>		
		</div>
	</article>

</section>







