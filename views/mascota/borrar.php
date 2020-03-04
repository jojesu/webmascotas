<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Borrar mascota</title>
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar mascota");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		<h2>Confirmar borrar mascota</h2>
		<p><?="$mascota->nombre"?></p>
		
		<form method="post" action="/mascota/destroy">
			<p>Confirmar el borrado de la mascota <?=$mascota->nombre?>.</p>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<a href="/mascota/show/<?=$mascota->id?>">Detalles</a> -
		<a href="/mascota/list">Volver al listado de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>
