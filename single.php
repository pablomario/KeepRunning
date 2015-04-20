
<style type="text/css">
		
		#cabecera_single{
			background: #FFFD7A;
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
			background: #fff;

		}

		#article_single{
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

		.carrousel{
			text-align: center;
		}
		.carrousel img{
			margin: 10px;
		}

		#footer_single{
			background: transparent;
			text-align: center!important;
		}



</style>





<section id="section_single" ng-controller="single" ng-repeat="key in carrera" >
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
				<img src="./imgs/carreras/cartel.png"> <img src="./imgs/carreras/cartel.png"> <img src="./imgs/carreras/cartel.png">
			</p>
			

		</div>
		
		<aside class="lateral_single">
			<h4>{{key.fecha}}</h4>
			<h4>{{key.hora}}</h4>
			<h4>Localizacion: <a href="{{key.localizacion}}"> ver mapa</a></h4>
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