<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la mascota <?=$mascota->nombre?></title>
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Detalles de la mascota</h2>
		<h3><?="$mascota->nombre"?></h3>
		
		<p><b>Nombre:</b> <?=$mascota->nombre?></p>
		<p><b>Sexo:</b> <?=$mascota->sexo?></p>
		<p><b>Biografía:</b> <?=$mascota->biogafia?></p>
		<p><b>Fecha nacimiento:</b> <?=$mascota->fechanacimiento?></p>
		<p><b>Fecha fallecimiento:</b> <?=$mascota->fechafallecimiento?></p>	
	
		<a href="/mascota/edit/<?=$mascota->id?>">Editar mascota</a> - 
		<a href="/mascota/delete/<?=$mascota->id?>">Borrar mascota</a> - 
		<a href="/mascota/list">Lista de mascotas</a> 
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
