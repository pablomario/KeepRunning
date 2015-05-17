

	<link rel="stylesheet" type="text/css" href="./js/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="./js/resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="./js/resources/demo.css">
	
	<script type="text/javascript" language="javascript" src="./js/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="./js/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="./js/resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="./js/resources/demo.js"></script>

	<script type="text/javascript" language="javascript" class="init">

		$(document).ready(function() {
		    $('#example').dataTable( {
		        "ajax": 'lib/tables.php'		        
		    } );

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
		
			<table id="example" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>name</th>
            <th>position</th>
            <th>salary</th>
            <th>office</th>
            
        </tr>
    </thead>
 
    <tfoot>
        <tr>
           <th>name</th>
            <th>position</th>
            <th>salary</th>
            <th>office</th>
        </tr>
    </tfoot>
</table>


	</article>
</section>