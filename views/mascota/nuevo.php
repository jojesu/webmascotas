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
		
			<input type="hidden" name="idusuario" value="<?= Login::get($id);?>">	
			<label>Nombre</label>
			<input type="text" name="nombre">
			<br>
			<label>Sexo:</label><br>
			<input type="radio" name="sexo" value="v">
			<label>V</label>			
			<input type="radio" name="sexo" value="m">
			<label>M</label>
			<br>
			<label>Biografía</label>
			<input type="text" name="biografia">
			<br>
			<label>Fecha nacimiento</label>
			<input type="date" name="fechanacimiento">
			<br>
			<label>Fecha fallecimiento</label>
			<input type="date" name="fechafallecimiento">
			<br>
			<select name="idraza">
			<?php 
			foreach ($razas as $raza)
			      echo "<option value='$raza->id'>$raza->tipo $raza->raza</option>"; 
			?>
			</select>			
			<input type="submit" name="guardar" value="Guardar">
		</form>
		<br>
		<a href="/mascota/list">Volver al listado de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
    		
	</body>
</html>

