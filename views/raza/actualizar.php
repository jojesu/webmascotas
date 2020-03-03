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
		<p><?="$usuario->usuario ($usuario->email)"?></p>
		
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<form method="post" action="/raza/update">
		
		    <!-- id del usuario a modificar -->
			<input type="hidden" name="id" value="<?=$raza->id?>">
			
			<!-- resto del formulario... -->
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?=$raza->nombre?>">
			<br>
			<label>Descripcion</label>
			<input type="textarea" name="descripcion">
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








