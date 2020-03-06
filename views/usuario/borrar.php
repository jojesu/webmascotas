<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos del usuario <?=$usuario->usuario?></title>
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
		  (TEMPLATE)::header("Baja de usuario");
		  (TEMPLATE)::nav();
		?>  
		<h2>Confirmar baja de usuario</h2>
		<p><?="$usuario->usuario ($usuario->email)"?></p>
		
		<form method="post" action="/usuario/destroy">
			<p>Confirmar el borrado del usuario <?=$usuario->usuario?>.</p>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="submit" name="borrar" value="Borrar">
		</form>
		<br>
		<a href="/usuario/show/<?=$usuario->id?>">Detalles</a> -
		<a href="/usuario/list">Volver al listado de usuarios</a>
		
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>








