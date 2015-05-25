<footer>
	<article class="footer-center">
		<img src="./imgs/KeepRunning.png" alt="logo mini">
		<img src="./imgs/vendors/angularLogo.png" alt="logo tecnoologia">
		<img src="./imgs/vendors/mongodb.png" alt="logo tecnoologia">
	</article>	
	<article class="footer-center">
		<ul ng-controller="enlacesmenu">
			<li ng-repeat="key in menu">
				<a href="#/{{ key.url }}"><i class="{{key.icon}}"></i><span>{{ key.nombre }}</span></a>
			</li>
		</ul>
	</article>	
</footer>