
<?php session_start(); ?>
<section id="section_single" ng-controller="single" ng-repeat="key in carrera" ng-init="usuario = ' <?= $_SESSION['email']; ?>  ' ">

<style type="text/css">
	#cabecera_single{
		background: url({{key.imagenCabecera}}) center center;
		background-size: cover;
		width: 100%;
	}

</style>	
	<!-- en formato cartel poner todas las carreras disponibles -->
	<div id="cabecera_single"></div>
	<header id="header_single">
		<div class="contenido_single">
			<h1>{{key.edicion}} {{key.nombre}}</h1> 
		</div>


		
		<aside class="lateral_single">
			<?php
				if($_SESSION['authentication'] == 1){
					echo '<div ng-if="key.inscripcion == true">';
						echo '<a id="buttonLogin" class="button rosa big" ng-click=inscripcion(key.id)>Inscripción</a>';
					echo '</div>';
					echo '<div ng-if="key.inscripcion==false">';
						echo '<a id="buttonLogin" class="button azul big">CERRADO</a>';
					echo '</div>';
				}else{
					echo '<h2 class="alert"><i class="fa fa-exclamation-triangle"></i> Debes estar registrado para inscribirte</h2>';
				}
			?>
			
			
		</aside>




	</header>
	<article id="article_single"> 
		<div class="contenido_single">
			<h2>Bienvenido</h2>
			<p>
				{{key.descripcion}}
			</p>

			<h2>Algunas fotos de años anteriores</h2>
			<p class="carrousel">
				<img src="./imgs/carreras/5.png"> <img src="./imgs/carreras/5.png"> <img src="./imgs/carreras/5.png"> <img src="./imgs/carreras/5.png">
			</p>
			
			<div ng-if="key.video" >
				<h2>Videos:</h2>
				<p><iframe width="560" height="315" src='{{key.video}}' frameborder="0" allowfullscreen></iframe></p>
			</div>
		</div>
		
		<aside class="lateral_single">
			
			
		
			<h3>Fecha:</h3>
			<h4>{{key.fecha}} - {{key.hora}}</h4>	
					
			<img src="{{key.imagenCartel}}"/>
			<h4> Contacto: </h4>
			<p>Email: {{key.contactoEmail}}</p>
			<p>Telefono: {{key.contactoTelef}}</p>

		</aside>

		<footer id="footer_single">		
			<h2>Patrocinadores</h2>
			<p class="carrousel">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
				<img src="http://127.0.0.1/pmKeep/imgs/logo.png">
			</p>
		</footer>
	</article>

</section>