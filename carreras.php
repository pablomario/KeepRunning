<section ng-controller="proximasCarreras">
	
{{carreras}}
{{caca}}
<article class="cartel" ng-repeat="(key in carreras)">
	<img src="{{key.cartel}}"><a href="http://127.0.0.1/pmKeep/#/single/{{key.id}}">{{key.nombre}}</a>
</article>

 	
</section>