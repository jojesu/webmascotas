<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de usuarios</title>
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
		  (TEMPLATE)::header("Nueva Raza");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		
		<h2>Nueva Raza</h2>
		
		<form method="post" action="/raza/store">
			<label>Tipo:</label>
			<select name='idtipo' value='<?=$tipo->id?>'>
			<?php 
			foreach ($tipos as $tipo)
			    echo "<option value='$tipo->id' name='$tipo->nombre'>$tipo->nombre</option>";
			?>
			</select>
		
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br>
			<label>Descripcion:</label>
			<input type="textarea" name="descripcion">
			<br>

			<input type="submit" name="guardar" value="Guardar">
		</form>
		<br>
		<a href="/raza/list">Volver al listado de usuarios</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
    		
	</body>
</html>








