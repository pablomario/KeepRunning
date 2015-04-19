
<section ng-controller="proximasCarreras">
	

	<article class="cartel" ng-repeat="key in carreras">
		
		
		<img src="{{key.imagenCartel}}"><a href="http://127.0.0.1/pmKeep/#/single/{{key.id}}">{{key.nombre}}</a>
	</article>

 	
</section>