<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar tipos de mascota <?=$tipo->nombre?></title>
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
		  (TEMPLATE)::header("Actualizar tipos de mascota");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
				
		<h2>Formulario de edición</h2>
		<p><?="$tipo->nombre"?></p>
		
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<form method="post" action="/tipo/actualizar">
		
		    <!-- id del tipo de mascota a modificar -->
			<input type="hidden" name="id" value="<?=$tipo->id?>">
			
			<!-- resto del formulario... -->
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$tipo->nombre?>">
			<br>
			<label>Descripción</label>
			<input type="text" name="descripcion" value="<?=$tipo->descripcion?>">
			<br>	
			<input type="submit" name="actualizar" value="Actualizar">
		</form>
		<br>
		
		<a href="/tipo/show/<?=$tipo->id?>">Detalles</a> - 
		<a href="/tipo/list">Volver al listado de tipos de mascotas</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
		
	</body>
</html>
