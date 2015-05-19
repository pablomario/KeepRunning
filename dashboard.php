
<?php
	session_start();
	if($_SESSION['authentication'] == 0){
		header('Location: #/index.php');
	}
?>

<section id="dashboard">

<style type="text/css">
	#cabecera_single{
		background: #03A9F4;
		background-size: cover;
		height: 200px;
	}

</style>

	<!-- en formato cartel poner todas las carreras disponibles -->
	<div id="cabecera_single"></div>

	<header id="header_single">
		<div class="contenido_single">
			<h1>{{lugar}}</h1> 
		</div>		
		<aside class="lateral_single"></aside>
	</header>

	<article id="article_single"> 
		<div class="contenido_single">			
			<h2>Datos del usuario</h2>
			<br>
			<p><em>Usuario:</em> <span><?= $_SESSION['nombre']; ?></span> .</p>
			<p><em>Sexo:</em> <span><?= $_SESSION['sexo']; ?></span> .</p>
			<p><em>Edad:</em> <span><?= $_SESSION['edad']; ?></span> años humanos.</p>
			<p><em>Email:</em> <span><?= $_SESSION['email']; ?></span> .</p>			
			<p><em>Tipo:</em> <span><?php if($_SESSION['tipo']==0) echo "Usuario Registrado";else if($_SESSION['tipo']==1) echo "Organizador"; ?></span> .</p>	

			<h2>Modificación de sus datos personales*</h2>
			<p>Puede acceder al panel de edición de datos personales pulsando en el siguiente boton.</p>
			<p>**Recuerde que algunos datos no podran alterarse.</p>
			<br>
			<p><a class="button big azul" href="#">Editar Perfil</a></p>
			<br>
		</div>
	</article>
</section>