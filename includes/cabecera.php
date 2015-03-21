<header>
	<!-- Logotipo y cosas de el usuario -->
	<div id="headerleft"> <img id="logotipo" src="./imgs/logo.png"> </div> 
	<div id="headercenter"> <input id="buscador" type="search"> </div>
	<div id="headerright">
		<a href="#" id="buttonLogin" class="button amarillo large">Iniciar Sesion</a>
		<?php  ?>
			<!-- <img id="avatar" src="./avatares/yo.png"> --> 
	</div>
</header>
<div id="formularioLogin">
	<form action="./lib/login.php" method="POST">
		<input type="text" name="email" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
		<input type="password" name="password" placeholder="*********">
		<input type="submit" class="button amarillo large" value="Iniciar Sesion">
	</form>
</div>