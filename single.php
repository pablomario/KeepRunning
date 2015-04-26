


<section id="section_single" ng-controller="single" ng-repeat="key in carrera" >

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
			<div ng-if="key.inscripcion">
				<a id="buttonLogin" class="button rosa big">Inscripción</a>
			</div>
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