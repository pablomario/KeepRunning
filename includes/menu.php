<aside>
	<!-- Todo el menu de navegacion -->
	<ul ng-controller="enlacesmenu">
		<li ng-repeat="key in menu">
			<a href="http://127.0.0.1/pmKeep/#/{{ key.url }}"><i class="{{key.icon}}"></i> {{ key.nombre }}</a>
		</li>
	</ul>

</aside>