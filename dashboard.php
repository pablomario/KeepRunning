
<?php
	session_start();
	if($_SESSION['authentication'] == 0){
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
			<h2>Datos del usuario</h2>
				<br>
				<p><em>Usuario:</em> <span><?= $_SESSION['nombre']; ?></span> .</p>
				<p><em>Sexo:</em> <span><?= $_SESSION['sexo']; ?></span> .</p>
				<p><em>Edad:</em> <span><?= $_SESSION['edad']; ?></span> años humanos.</p>
				<p><em>Email:</em> <span><?= $_SESSION['email']; ?></span> .</p>			
				<p><em>Tipo:</em> <span><?php if($_SESSION['tipo']==0) echo "Usuario Registrado";else if($_SESSION['tipo']==1) echo "Organizador"; ?></span> .</p>	

			<h2>Carreras Inscritas</h2>								
				<table>
					<thead>
						<tr>
							<th>Carrera</th>
							<th>Edicion</th>
							<th>Fecha</th>
							<th>Dorsal</th>
						</tr>
					</thead>

					<tbody ng-repeat="key in carreras">
						<tr>
							<td class="ajustado_left">{{key.carreraNombre}}</td>
							<td>{{key.carreraEdicion}}</td>
							<td>{{key.carreraFecha}}</td>
							<td>{{key.dorsal}}</td>
							<td><a class="button amarillo small" href="index.php#/single/{{key.carrera}}" target="_black">ver</a></td>
						</tr>
					<tbody>

					<tfoot>
						<tr>
							<th>Carrera</th>
							<th>Edicion</th>
							<th>Fecha</th>
							<th>Dorsal</th>					                
						</tr>
					</tfoot>
				</table>

			<h2>Eliminar cuenta personal*</h2>
				<p>Por motivos de seguridad y control sus marcas personales e inscripciones permaneran almacenados.</p>
				<p>**Recuerde que si decide regresar recuperara todos sus datos.</p>
				<br>
				<p><a class="button big rojo" ng-click="eliminarUsuario()">Eliminar Perfil</a></p>				
				<br>
		</div>



		<aside class="lateral_single">
			<div ng-controller="dashboard"><div><img src="{{avatar}}"></div></div>
			<h2>Cambio Avatar</h2>				
			<div class="seleccion_avatar_ajuste">
				<div class="cuadro"><img src="./imgs/avatares/boy1.png" ng-click="cambioAvatar('./imgs/avatares/boy1.png')"><br/></div>
				<div class="cuadro"><img src="./imgs/avatares/boy2.png" ng-click="cambioAvatar('./imgs/avatares/boy2.png')"><br/></div>
				<div class="cuadro"><img src="./imgs/avatares/girl1.png" ng-click="cambioAvatar('./imgs/avatares/girl1.png')"><br/></div>
				<div class="cuadro"><img src="./imgs/avatares/girl2.png" ng-click="cambioAvatar('./imgs/avatares/girl2.png')"><br/></div>
			</div>				
		</aside>
	</article>

</section>