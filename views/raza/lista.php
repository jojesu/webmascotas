<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<div class="container"> 
		<h2 class="text-center">Lista de razas</h2>
		<div class="table-responsive">	
		<table class="table table-hover">
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
    			   echo " <a href='/raza/show/$raza->id'><i class='fas fa-search' style='color:black'></i></a>";
    			   echo "-<a href='/raza/edit/$raza->id'><i class='fas fa-edit' style='color:black'></i></a>";
    			   echo "-<a href='/raza/delete/$raza->id'><i class='fas fa-trash-alt' style='color:black'></i></a>";
    			   echo "</td>";
    			   echo "</tr>";
    		}?>
		</table>
		</div>
		</div>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>

