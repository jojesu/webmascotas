<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles del tipo de mascota <?=$tipo->nombre?></title>
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Detalles del tipo de mascota</h2>
		<h3><?="$tipo->nombre"?></h3>
		
		<p><b>Nombre:</b> <?=$tipo->nombre?></p>
		<p><b>Descipción:</b> <?=$tipo->descripcion?></p>	
	
		<a href="/tipo/edit/<?=$tipo->id?>">Editar tipo de mascota</a> - 
		<a href="/tipo/delete/<?=$tipo->id?>">Borrar tipo de mascota</a> - 
		<a href="/tipo/list">Lista de tipos de mascotas</a> 
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
