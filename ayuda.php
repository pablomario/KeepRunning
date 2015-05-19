

<script type="text/javascript" src="./js/acordeon.js"></script>	


<section id="section_single" ng-controller="ayuda">

<style type="text/css">
	#cabecera_single{
		background: url(./imgs/portada/learner.jpg) center center;
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
			<h2>¿Que es KeepRunning?</h2>
			<p>
				Somos una plataforma cercana, creada por y para deportistas, sabemos que te gusta correr y que no dejas escapar
				ningun evento, por eso hemos querido unificar en una misma plataforma el maximo numero de 
				carreras populares. 
			</p>
		

			<h2>¿Que ofrecemos?</h2>
			<p>
				Si eres corredor te damos la oportunidad de apuntarte y llevar el control de todas las carreras en
				las que participas desde un mismo lugar.
			</p>
			<p>
				Si eres un organizador, puedes crear y gestionar la totalidad de tus carreras populares,
				en la seccion "Contacto" tienes los pasos a realizar para obtener una prueba gratuita de la plataforma.
			</p>
		

			<h2>Uso de las últimas Tecnologias</h2>
			<p>
				En la realización de esta platafora se ha apostado por el uso de las últimas tecnologías como <a href="https://angularjs.org/" target="_black">AngularJS</a>, 
				<a href="http://php.net/downloads.php#v5.5.25" target="_black">PHP5.5.25</a> y <a href="https://www.mongodb.org/" target="_black">MongoDB</a> de esta pretendemos obtener el máximo rendimiento y garantizar la mejor experiencia de usuario posible.
			</p>
			

			<h2>KeepRunning Experimental</h2>
			<p>
				Actualmente la plataforma se encuentra en continua evolución, trabajamos día a día para incluir el 
				máximo número de opciones.
				Algunas de las proximas mejoras son las siguientes:
				<ul class="lista_con_estilo">
					<li>Plataforma de Pago para Organizadores/Usuarios.</li>
					<li>Gestión de Tiempos.</li>
					<li>Gestión de Inscripciones.</li>
					<li>Versión Pura Responsive.</li>
				</ul>
			</p>
			

			<h2>Preguntas y Respuestas Frecuentes [FAQ's]</h2>
			<br/>
			<div class="menujq">
				<ul>
					<li><h3><i class="fa fa-sort-desc"> </i> ¿Que Base de Datos usa? - MongoDB noSQL</h3>
						<ul>
							<li>
								<img src="./imgs/vendors/mongodb.png"/>
								<p> 
									Actualmente se está extendiendo el uso de bases de datos noSQL, en esto momentos
									MongoDB es la referencia en este campo, de ahí mi motivación para estudiar su uso,
									funcionamiento y limitaciones. 
								</p>
								<br/>
								<p>
									Así mismo con la intención de usar el framework AngularJS, esta base de datos 
									parecia la mas indicada para un funcionamiento más optimo de la aplicación.
								</p>
								<br/>
							</li>
						</ul>
					</li>
					<li><h3><i class="fa fa-sort-desc"> </i> ¿Porque usar un Framework FrontEnd? - AngularJS</h3>
						<ul>
							<li>
								<img src="./imgs/vendors/angularLogo.png"/>
								<p>
									La principal motivación del uso de AngularJS a sido el aprendizaje de un framework
									que esta tomando gran popularidad y explota al máximo las caracteristicas de HTML. 
									Además cuenta con el desarrollo de Google lo que hace que posiblemente sea el mejor
									framework Javascript para desarrollo de Apps. 
								</p>	
								<br/>								
							</li>
						</ul>
					</li>
					<li><h3><i class="fa fa-sort-desc"> </i> GIT - github.com</h3>
						<ul>
							<li>
								<img src="./imgs/vendors/git.png"/>
								<p>
									El uso de Git se hace necesario para tener un control de versiónes del software 
									en desarollo, como ventaja añadida se hace patente el uso del mismo como copia de
									respaldo. 
								</p>
								<br/>
							</li>
						</ul>
					</li>
					<li><h3><i class="fa fa-sort-desc"></i> Apache y PHP5.5.25 </h3>
						<ul>
							<li>
								<p>
									Apache: En un principio no fué la primera elección pero debido a la complejidad 
									acarreada del estudio y aprendija de uso de MongoDB y AngularJS se optó por el uso
									de este servidor por su sencilled, estabilidad y facil manejo.
								</p>
								<br/>
								<p>
									PHP5.5.25 junto a php5-mongodb: Al usar un servidor Apache me veo obligado al uso de
									PHP para la realización de las comunicaciones entre la base de datos MongoDB y 
									el framework AngularJS.
									Como valor añadido al uso de PHP es el uso de Sesiones en el lado del servidor, lo que
									otorga un grado más de seguridad. 
								</p>
								<br/>
								<p>
									* Para una aplicación de estas caracteristicas lo ideal es la utilizacion de una API REST.
								</p>
								<br/>
							</li>
						</ul>
					</li>
				</ul>
			</div>			
		</div>
	</article>

</section>

