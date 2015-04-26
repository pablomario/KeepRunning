
<style type="text/css">
		
		#cabecera_single{
			width: 100%;
			height: 450px;
		}

		#section_single{
			justify-content: center!important;
		}

		#header_single{
			width: 80%;
			padding: 1em;
			height: 8em;
			margin-top: -10em;
			background: rgba(255,255,255,0.8);

		}

		#article_single{
			background-color: #fff;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
			width: 80%;
			margin: 0;
		}

		#article_single h2{
			margin-top: 1em;
		}

		.contenido_single{
			width: 79%;
			float: left;
		}

		.lateral_single{
			width: 20%;
			min-height: 7em;
			background: transparent;
			float: right;
		}

		.lateral_single h2{
			text-align: left;
			font-size: 1.5em;
			margin-bottom: 1em;
		}

		.boton_inscripcion{
			text-align: center;
			padding: 20px;
			margin-bottom: 20px;
		}

		.carrousel{
			text-align: center;
		}
		.carrousel img{
			width: 200px;
			height: auto;
			margin: 10px;
		}

		#footer_single{
			background: transparent;
			text-align: center!important;
		}



</style>





<section id="section_single" ng-controller="single" ng-repeat="key in carrera" >

<style type="text/css">
	#cabecera_single{
		background: url({{key.imagenCabecera}}) center center;
		background-size: cover;
		width: 100%;
		height: 450px;
	}

</style>

	<!-- en formato cartel poner todas las carreras disponibles -->
	<div id="cabecera_single"></div>
	<header id="header_single">
		<div class="contenido_single">
			<h1>{{key.edicion}} {{key.nombre}}</h1> 
		</div>
		
		<aside class="lateral_single"></aside>
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
			<div class="boton_inscripcion" ng-if="key.inscripcion">
				<h2>Inscripciones Abiertas</h2>
				<a id="buttonLogin" class="button verde">Participar</a>
			</div>
		
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