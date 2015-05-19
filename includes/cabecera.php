<header>
	<!-- Logotipo y cosas de el usuario -->
	<div id="headerleft"> <img id="logotipo" src="./imgs/KeepRunning.png" style="height:100px; width: auto"> </div> 
	<div id="headercenter"> <input id="buscador" type="search"> </div>
	<div id="headerright">
		<?php
			if($_SESSION['authentication'] == 1){
				echo '<div id="cabecera_usuario">';
				echo '<div class="datos_personales"><h1> '.$_SESSION['nombre'].'</h1> <img id="avatar" src="'.$_SESSION['avatar'].'"></div>';
				echo '<div class="datos_personales botonera">';

					if($_SESSION['tipo']==0){
						echo '<a class="button azul small" href="index.php#/dashboard">Mi Perfil</a> ';
					}else if($_SESSION['tipo']==1){
						echo '<a class="button azul small" href="index.php#/dashboard">Mi Perfil</a>'; 
						echo '<a class="button verde small" href="index.php#/gestion">Gesti&oacute;n</a>';
					}else if($_SESSION['tipo']==7){
						echo '<a class="button amarillo small" href="index.php#/administracion">Administraci&oacute;n</a>';
					}
					echo '<a class="button rojo small" href="./lib/logout.php">Salir</a></div>';
				echo '</div>';
			}else{
				echo '<a id="buttonLogin" class="button azul">Iniciar Sesion</a>';				
			}
		?>		
	</div>

	<div id="formularioLogin">
		<form method="POST" id="board_login">
			<label>Usuario:</label>
			<input id="board_login_user" type="text" placeholder="alguien@ejemplo.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
			<label>Contrase&ntilde;a:</label>
			<input id="board_login_password" type="password" placeholder="*********">
			<input type="submit" class="button azul" value="Iniciar Sesion">
		</form>
	</div>

	
</header>
