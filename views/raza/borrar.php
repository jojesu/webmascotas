<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Baja de usuario</title>
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrado de una Raza");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		<h2>Confirmar baja de usuario</h2>
		<p><?="$usuario->usuario ($usuario->email)"?></p>
		
		<form method="post" action="/raza/destroy">
			<p>Confirmar el borrado de la raza <?=$raza->nombre?>.</p>
			<input type="hidden" name="id" value="<?=$raza->id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<a href="/raza/show/<?=$raza->id?>">Detalles</a> -
		<a href="/raza/list">Volver al listado de razas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>








