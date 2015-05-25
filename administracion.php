
<?php
	session_start();
	if($_SESSION['authentication'] == 0){
		header('Location: #/index.php');
	}
	if($_SESSION['tipo']!=7){
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
			<h2>Eventos</h2>								
			<table>
				<thead>
					<tr>
						<!-- <th>Identificador</th> -->
						<th>Cartel</th>
						<th>Carrera</th>
						<th>Edicion</th>
						<th>Fecha</th>
						<th>Email</th>
						<th>Telefono</th>
					</tr>
				</thead>

				<tbody ng-repeat="key in carreras">
					<tr>
						<!-- <td class="ajustado_left">{{key.carreraId}}</td> -->
						<td><img src="{{key.carreraCartel}}" style="width:90px; height:auto; "></td>
						<td>{{key.carreraNombre}}</td>
						<td>{{key.carreraEdicion}}</td>
						<td>{{key.carreraFecha}}</td>
						<td>{{key.carreraEmail}}</td>
						<td>{{key.carreraTelef}}</td>
						<td>
							<a ng-if="key.inscripcion==true" class="button rojo small" ng-click="cambioEstadoCarrera(0,key.carreraId)">Desactivar</a>
							<a ng-if="key.inscripcion==false" class="button verde small" ng-click="cambioEstadoCarrera(1,key.carreraId)">Activar</a>
						</td>
						<td><a class="button amarillo small" href="index.php#/single/{{key.carreraId}}" target="_black">Ver</a></td>
					</tr>
				<tbody>

				<tfoot>
					<tr>
						<!-- <th>Identificador</th> -->
						<th>Cartel</th>
						<th>Carrera</th>
						<th>Edicion</th>
						<th>Fecha</th>
						<th>Email</th>
						<th>Telefono</th>			                
					</tr>
				</tfoot>
			</table>


			<h2>Usuarios</h2>								
			<table>
				<thead>
					<tr>
						<th>Avatar</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Sexo</th>
						<th>Edad</th>
						<th>Tipo</th>
					</tr>
				</thead>

				<tbody ng-repeat="item in usuarios">
					<tr>
						<td><img src="{{item.usuarioAvatar}}" style="width:30px; height:auto; "></td>
						<td class="ajustado_left">{{item.usuarioNombre}}</td>
						<td>{{item.usuarioEmail}}</td>
						<td>{{item.usuarioSexo}}</td>
						<td>{{item.usuarioEdad}}</td>
						<td>{{item.usuarioTipo}}</td>						
						<td>
							<a ng-if="item.usuarioTipo==0" class="button verde small" ng-click="promocionUsuarioAdmin(1,item.usuarioEmail)">Promocionar</a>
							<a ng-if="item.usuarioTipo==1" class="button azul small" ng-click="promocionUsuarioAdmin(0,item.usuarioEmail)">Degradar</a>
						</td>
						<td ng-if="item.usuarioTipo==0"><a class="button rojo small" ng-click="eliminarUsuario(item.usuarioEmail)">Eliminar</a></td>
					</tr>
				<tbody>

				<tfoot>
					<tr>
						<th>Avatar</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Sexo</th>
						<th>Edad</th>
						<th>Tipo</th>			                
					</tr>
				</tfoot>
			</table>			
		</div>
		
	</article>

</section>