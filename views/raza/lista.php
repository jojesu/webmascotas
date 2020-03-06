<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de usuarios</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("RAZAS");
		  (TEMPLATE)::nav();
		?>  
		<h2>Lista de razas</h2>
			
		<table class="table">
			<tr>
				<th>RAZA</th>
				<th>DESCRIPCIÓN</th>
				<th>Operaciones</th>
			</tr>
    		<?php foreach($razas as $raza){
    			   echo "<tr>";
    			   echo "<td>$raza->nombre</td>";
    			   echo "<td>$raza->descripcion</td>";
    			   echo "<td>";
    			   echo " <a href='/raza/show/$raza->id'>Ver</a>";
    			   echo "-<a href='/raza/edit/$raza->id'>Actualizar</a>";
    			   echo "-<a href='/raza/delete/$raza->id'>Borrar</a>";
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

