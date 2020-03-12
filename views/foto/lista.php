<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Lista de fotos</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Fotos");
		  (TEMPLATE)::nav();
		?>  
		<h2>Lista de fotos</h2>
			
			<?php 
			foreach($fotos as $foto)
    			   echo "<a href='/mascota/show/$foto->idmascota'>
                         <img class='imagendetalle p-10 mb-5' src='/$foto->fichero'>
                         </a>";
    		?>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>

