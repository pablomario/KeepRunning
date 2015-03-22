
		<section>
		<!-- en formato cartel poner todas las carreras disponibles -->
			<article id="nuevoUsuario" class="largo"> 
				<h1> Nuevo Usuario </h1>
				<p> Actualmente el servio solo esta disponible para Alta de nuevos usuarios residentes en España.</p>
				<br/>
				<br/>
				<form method="POST" onsubmit="return validar()" action="./lib/nuevoUsuario.php">
					<label for="nombre"> Nombre Completo: </label>
					<input type="text" ng-requried="true" name="nombre" placeholder="Ej. Pablo Garcia Perez" required>

					<label for="email1"> Email: </label>
					<input type="email" ng-requried="true" name="email1" placeholder="alguien@ejemplo.com" required>

					<label for="email2"> Repita Email: </label>
					<input type="email" ng-requried="true" name="email2" placeholder="alguien@ejemplo.com" required>
					
					<label for="sexo"> Sexo: </label>
					<input name="sexo" value="Femenino" type="radio">Femenino<br/>
					<input name="sexo" value="Masculino" type="radio">Masculino<br/>

					<label for="nacimiento">Año de Nacimiento</label>
					<input type="number" ng-requried="true" name="nacimiento" patter="[0-9]{4,4}" value="1980" required>

					<label for="password1"> Contraseña: pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" </label>
					<input type="password" ng-requried="true" name="password1" placeholder="**************" required>

					<label for="password2"> Repita Contraseña: </label>
					<input type="password" ng-requried="true" name="password2" placeholder="**************" required>

					<input type="submit" value="Registrarme">
				</form>
			</article>
			
			
		</section>

	<script type="text/javascript">
		function validar(){
			var email1 = document.getElementsByTagName("email1").value;
			var email2 = document.getElementsByTagName("email2").value;
			if(email1!=email2){
				alert("Los campos email no coinciden");
				return false;
			}

			var pass1 = document.getElementsByTagName("password1").value;
			var pass2 = document.getElementsByTagName("password2").value;
			if(pass1!=pass2){
				alert("Las contraseñas deben ser iguales");
				return false;
			}

		}

	</script>
