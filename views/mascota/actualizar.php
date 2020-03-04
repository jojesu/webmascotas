<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos de la mascota <?=$mascota->nombre?></title>
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
		  (TEMPLATE)::header("Actualizar datos de la mascota");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
				
		<h2>Formulario de edición</h2>
		<p><?="$mascota->nombre"?></p>
		
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<form method="post" action="/mascota/actualizar">
		
		    <!-- id de la mascota a modificar -->
			<input type="hidden" name="id" value="<?=$mascota->id?>">
			
			<!-- resto del formulario... -->
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$mascota->nombre?>">
			<br>
			<label>Sexo:</label><br>
			<input type="radio" name="sexo" value="v">
			<label>V</label><br>			
			<input type="radio" name="sexo" value="m">
			<label>M</label>
			<br>
			<label>Biografía</label>
			<input type="text" name="biografia" value="<?=$mascota->biografia?>">
			<br>
			<label>Fecha nacimiento</label>
			<input type="date" name="fechanacimiento" value="<?=$mascota->fechanacimiento?>">
			<br>
			<label>Fecha fallecimiento</label>
			<input type="date" name="fechafallecimiento" value="<?=$mascota->fechafallecimiento?>">
			<br>			
			<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		
		<a href="/mascota/show/<?=$mascota->id?>">Detalles</a> - 
		<a href="/mascota/list">Volver al listado de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
		
	</body>
</html>
