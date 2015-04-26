
<section ng-controller="proximasCarreras">	

	<article class="cartel" ng-repeat="key in carreras">
		<img src="{{key.imagenCartel}}">
		<div class="contenido">
			<h4>{{key.nombre}}</h4>
			<a href="#/single/{{key.id}}"> PARTICIPAR </a>
		</div>
	</article>
 	
</section>