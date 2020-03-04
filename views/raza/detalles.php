<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles del usuario <?=$usuario->usuario?></title>
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles de la Raza");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Detalles de la raza</h2>
	
		<p><b>RAZA:</b> <?=$raza->nombre?></p>
		<p><b>DESCRIPCIÓN:</b> <?=$raza->descripcion?></p>
	
	
		<a href="/raza/edit/<?=$raza->id?>">Editar raza</a> - 
		<a href="/raza/delete/<?=$raza->id?>">Borrar raza</a> - 
		<a href="/raza/list">Lista de razas</a> 
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>