
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



<section id="section_single" ng-controller="dcAjax">
	<!-- en formato cartel poner todas las carreras disponibles -->
	<div id="cabecera_single"></div>
	<header id="header_single">
		<div class="contenido_single">
			<h1>{{resultado}}</h1>
		</div>
		
		<aside class="lateral_single"></aside>
	</header>
	<article id="article_single"> 
		<div class="contenido_single">
			<h2>Bienvenido</h2>
			<p>
				La asociación cultural y deportiva “los elegantes”, con la colaboración del Ayuntamiento de Almaluez, 
				organiza la I Carrera Popular del Torrezno que tendrá lugar en Chércoles (soria) el próximo 9 de Agosto 
				de 2014 a las 18:30h de la Tarde.
				Se trata de dos carreras una popular de 1KM y otra de 7KM más profesional y 
				exigente ya que se sube cerca de los 1000 metros de altura.
				Como principales atractivos están aparte de realizar deporte que es sano y saludable, 
				la organización entregará un torrezno recién cocinado a todos los participantes de nuestro patrocinador 
				Moreno Sáez, así como un boleto de bingo para un gran bingo que se realizará ese mismo día por la noche.
				Puedes apuntarte a la carrera con camiseta o no e incluso si eliges la opción de camiseta puedes 
				elegir la talla.
				El día de la carrera, la inscripción será de 1 euro más por inscrito y sin posibilidad de elegir camiseta.
			</p>

			<h2>Algunas fotos de años anteriores</h2>
			<p class="carrousel">
				<img src="./imgs/carreras/cartel.png"> <img src="./imgs/carreras/cartel.png"> <img src="./imgs/carreras/cartel.png">

			</p>

			<h2>RECOGIDA DORSAL</h2>
			<p>
				La entrega de dorsales y camisetas  se realizará  en la plaza mayor de Chércoles de 18:00 a 20:00 el 
				dia 08 de Agosto.  Será necesario acreditar la identidad y entregar el recibo de pago. 
				Para recoger el dorsal de otra persona, será necesario entregar una autorización firmada 
				con el nº de DNI del atleta.
			</p>
			
			<h2>¿Qué es lo que incluye el kit del participante?</h2>
			<p>
				Dorsal, cartón de bingo para el mismo dia de la prueba 09 de agosto por la noche que se 
				celebrará en la localidad, merchandising y camiseta técnica (en el caso de solicitarla).
			</p>

		</div>
		
		<aside class="lateral_single">
				
			<img src="./imgs/carreras/cartel.png"> <a href="http://127.0.0.1/pmKeep/#/single/'.$i.'">
			<h4> I Carrera del Torrezno </h4></a> <p>Inscripcion Cerrada</p>

		</aside>

		<footer id="footer_single">			
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