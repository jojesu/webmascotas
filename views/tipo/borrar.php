<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Borrar tipo de mascota</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar tipo de mascota");
		  (TEMPLATE)::nav();
		?>  
		<h2>Confirmar borrar tipo de mascota</h2>
		<p><?="$tipo->nombre"?></p>
		
		<form method="post" action="/tipo/destroy">
			<p>Confirmar el borrado del tipo de mascota <?=$tipo->nombre?>.</p>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<a href="/tipo/show/<?=$tipo->id?>">Detalles</a> -
		<a href="/tipo/list">Volver al listado de tipos de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>	
</html>