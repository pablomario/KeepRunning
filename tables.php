

	<link rel="stylesheet" type="text/css" href="./js/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="./js/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="./js/resources/demo.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="./js/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="./js/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="./js/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="./js/resources/demo.js"></script>

<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {

	$.get( "lib/tables.php", function( data ) {

		$('#example').dataTable( {
			"ajax": data
		} );
	});

	
} );

</script>



<section id="section_single">



<style type="text/css">
	#cabecera_single{
		background: url(./imgs/portada/otr.png) center center;
		background-size: cover;
	}

</style>

	<div id="cabecera_single"></div>
	<header id="header_single">
		<div class="contenido_single">
			<h1>TABLES</h1> 
		</div>
		
		
	</header>
	<article id="article_single"> 
		
			<table id="example" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>id</th>
						<th>nombre</th>
						<th>edicion</th>
						<th>inscripcion</th>
						<th>fecha</th>
						<th>hora</th>

							
					</tr>
				</thead>

				<tfoot>
					<tr>
						<th>id</th>
						<th>nombre</th>
						<th>edicion</th>
						<th>inscripcion</th>
						<th>fecha</th>
						<th>hora</th>
					</tr>
				</tfoot>
			</table>


	</article>
</section>