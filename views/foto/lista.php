<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de fotos</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Usuarios");
		  (TEMPLATE)::nav();
		?>  
		<h2>Lista de fotos</h2>
			
		<table border="1">
			<?php foreach($fotos as $foto){
    			   echo "<img src='$foto->fichero' alt='Mascota::getById($foto->idmascota)->nombre'>";
    			   echo "<td>Mascota::getById($foto->idmascota)->nombre</td>";
    			   echo "<td>Usuario::getById(Mascota::getById($foto->idmascota))->nombre</td>";
    			   echo "<td>";
    			   echo " <a href='/usuario/show/$usuario->id'>Ver</a>";
    			   echo "-<a href='/usuario/edit/$usuario->id'>Actualizar</a>";
    			   echo "-<a href='/usuario/delete/$usuario->id'>Borrar</a>";
    			   echo "</td>";
    			   echo "</tr>";
    		}?>
		</table>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>

