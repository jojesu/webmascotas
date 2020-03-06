<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de tipos de mascotas</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
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
		  (TEMPLATE)::header("Registro de tipos de mascotas");
		  (TEMPLATE)::nav();
		?>  
		
		<h2>Nueva mascota</h2>
		
		<form method="post" action="/tipo/store">
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$tipo->nombre?>">
			<br>
			<label>Descripción:</label><br>
			<input type="text" name="descripcion" value="<?=$tipo->descripcion?>">
			<br>			
			<input type="submit" name="guardar" value="Guardar">
		</form>
		<br>
		<a href="/tipo/list">Volver al listado de tipos de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
    		
	</body>
</html>