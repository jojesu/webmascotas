<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Baja de usuario</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar una foto");
		  (TEMPLATE)::nav();
		?>  
		<h2>Confirmar borrado de la foto</h2>
			
		<form method="post" action="/foto/destroy">
			<p>Confirmar el borrado de la foto <?=$foto->id?>.</p>
			<img src="<?=$foto->fichero?>">
			<input type="hidden" name="id" value="<?=$foto->id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<a href="/foto/list">Volver al listado de fotos</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>








