
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
			
			<h2>Carreras Organizadas</h2>								
				<table>
					<thead>
						<tr>
							<th>Identificador</th>
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
							<td class="ajustado_left">{{key.carreraId}}</td>
							<td><img src="{{key.carreraCartel}}" style="width:90px; height:auto; "></td>
							<td>{{key.carreraNombre}}</td>
							<td>{{key.carreraEdicion}}</td>
							<td>{{key.carreraFecha}}</td>
							<td>{{key.carreraEmail}}</td>
							<td>{{key.carreraTelef}}</td>
							<td><a class="button azul small" href="index.php#/single/{{key.carreraId}}" target="_black">editar</a></td>
							<td><a class="button amarillo small" href="index.php#/single/{{key.carreraId}}" target="_black">ver</a></td>
						</tr>
					<tbody>

					<tfoot>
						<tr>
							<th>Identificador</th>
							<th>Cartel</th>
							<th>Carrera</th>
							<th>Edicion</th>
							<th>Fecha</th>
							<th>Email</th>
							<th>Telefono</th>			                
						</tr>
					</tfoot>
				</table>
			
		</div>
		
	</article>

</section>