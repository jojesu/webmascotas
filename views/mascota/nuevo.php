<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de mascotas</title>
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
		  (TEMPLATE)::header("Registro de mascotas");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Nueva mascota</h2>
		
		<form method="post" action="/mascota/store">
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
			<input type="submit" name="guardar" value="Guardar">
		</form>
		<br>
		<a href="/mascota/list">Volver al listado de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
    		
	</body>
</html>

