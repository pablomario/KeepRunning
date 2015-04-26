<header>
	<!-- Logotipo y cosas de el usuario -->
	<div id="headerleft"> <img id="logotipo" src="./imgs/KeepRunning.svg" style="height:70px; width: auto"> </div> 
	<div id="headercenter"> <input id="buscador" type="search"> </div>
	<div id="headerright">
		<a id="buttonLogin" class="button azul">Iniciar Sesion</a>
	</div>
</header>
<div id="formularioLogin">
	<form action="./lib/login.php" method="POST">
		<input type="text" name="email" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
		<input type="password" name="password" placeholder="*********">
		<input type="submit" class="button" value="Iniciar Sesion">
	</form>
</div>