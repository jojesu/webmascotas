 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar la raza <?=$raza->nombre?></title>
		<style>
		  form label{
		      display: inline-block;
		      min-width: 100px;
		      padding: 5px;
		  }
		</style>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Actualizar la raza");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
				
		<h2>Formulario de edición</h2>
		
		<form method="post" action="/raza/update">
		
		    <!-- id del usuario a modificar -->
			<input type="hidden" name="id" value="<?=$raza->id?>">
			<input type="hidden" name="idtipo" value="<?=$raza->idtipo?>">

			<!-- resto del formulario... -->
			<label>Nombre:</label>
			<input type="text" name="nombre" value="<?=$raza->nombre?>">
			<br>
			<label>Descripcion:</label>
			<textarea name="descripcion">
			<br>
			
			<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		
		<a href="/raza/show/<?=$raza->id?>">Detalles</a> - 
		<a href="/raza/list">Volver al listado de razas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
		
	</body>
</html>








