
<?php
	session_start();
	if($_SESSION['authentication'] == 0){
		header('Location: #/index.php');
	}
	if($_SESSION['tipo']==1 || $_SESSION['tipo']==7){
		// Usuario valido
	}else{
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
			
			<h2>Usuarios inscritos actualmente</h2>	

				<table>
					<h2>Listado Feminas</h2>
					<thead>
						<tr>
							<th>Avatar</th>
							<th>Nombre</th>
							<th>Dorsal</th>
							<th>Sexo</th>
						</tr>
					</thead>

					<tbody ng-repeat="lola in listadoInscritos">
						<tr ng-if="lola.sexo=='Femenino' ">
							<td><img src="{{lola.avatar}}" style="width:90px; height:auto; "></td>
							<td class="ajustado_left">{{lola.nombre}}</td>							
							<td>{{lola.dorsal}}</td>
							<td>{{lola.sexo}}</td>							
						</tr>
					<tbody>

					<tfoot>
						<tr>
							<th>Avatar</th>
							<th>Nombre</th>
							<th>Dorsal</th>
							<th>Sexo</th>		                
						</tr>
					</tfoot>
				</table>		


				<table>
					<h2>Listado Masculinos</h2>
					<thead>
						<tr>
							<th>Avatar</th>
							<th>Nombre</th>
							<th>Dorsal</th>
							<th>Sexo</th>
						</tr>
					</thead>

					<tbody ng-repeat="lola in listadoInscritos">
						<tr ng-if="lola.sexo=='Masculino' ">
							<td><img src="{{lola.avatar}}" style="width:90px; height:auto; "></td>
							<td class="ajustado_left">{{lola.nombre}}</td>							
							<td>{{lola.dorsal}}</td>
							<td>{{lola.sexo}}</td>							
						</tr>
					<tbody>

					<tfoot>
						<tr>
							<th>Avatar</th>
							<th>Nombre</th>
							<th>Dorsal</th>
							<th>Sexo</th>		                
						</tr>
					</tfoot>
				</table>
		</div>
		
	</article>

</section>