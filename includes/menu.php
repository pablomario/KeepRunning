<aside id="mainMenu">
	<!-- Todo el menu de navegacion -->
	<ul ng-controller="enlacesmenu">
		<li ng-repeat="key in menu">
			<a href="#/{{ key.url }}"><i class="{{key.icon}}"></i><span>{{ key.nombre }}</span></a>
		</li>
	</ul>

</aside>