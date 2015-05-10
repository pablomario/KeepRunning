<header>
	<!-- Logotipo y cosas de el usuario -->
	<div id="headerleft"> <img id="logotipo" src="./imgs/KeepRunning.svg" style="height:70px; width: auto"> </div> 
	<div id="headercenter"> <input id="buscador" type="search"> </div>
	<div id="headerright">
		<?php
			if($_SESSION['authentication'] == 1){
				echo '<h1> '.$_SESSION['nombre'].'</h1> <img id="avatar" src="./imgs/avatares/yo.png">';
				echo '<a href="./lib/logout.php">Salir</a>';
			}else{
				echo '<a id="buttonLogin" class="button azul">Iniciar Sesion</a>';				
			}
		?>		
	</div>

	<div id="formularioLogin">
		<form action="./lib/login.php" method="POST">
			<input type="text" name="email" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
			<input type="password" name="password" placeholder="*********">
			<input type="submit" class="button azul" value="Iniciar Sesion">
		</form>
	</div>

	
</header>
