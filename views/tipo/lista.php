<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Actualizar razas y tipos</title>
		<script src="https://kit.fontawesome.com/b96ccb0f2a.js" crossorigin="anonymous"></script>
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
		  (TEMPLATE)::header("Usuarios");
		  (TEMPLATE)::nav();
		?> 
		 
			<br>
			<div class="container">
    		<h2>Lista de razas</h2>
    		<div class="table-responsive">			
    		<table class="table table-hover">
    			<tr>
    				<th class="table-active">Nombre</th>
    				<th class="table-active">Descripción</th>
    				<th class="table-active">Operaciones</th>
    			</tr>
        		<?php foreach($razas as $raza){
        			   echo "<tr>";
        			   echo "<td>$raza->nombre</td>";
        			   echo "<td>$raza->descripcion</td>";
        			   echo "<td>";
        			   echo " <a href='/raza/show/$raza->id'><i class='fas fa-search' style='color:black'></i></a>";
        			   echo " - <a href='/raza/edit/$raza->id'><i class='fas fa-edit' style='color:black'></i></a>";
        			   echo " - <a href='/raza/delete/$raza->id'><i class='fas fa-trash-alt' style='color:black'></a>";
        			   echo "</td>";
        			   echo "</tr>";
        		}?>
    		</table>
    		</div>
    		<h2>Lista de tipos</h2>	
    		<div class="table-responsive">		
    		<table class="table table-hover">
    			<tr class="table-active">
    				<th>Nombre</th>
    				<th>Descripción</th>
    				<th>Operaciones</th>
    			</tr>
        		<?php foreach($tipos as $tipo){
        			   echo "<tr>";
        			   echo "<td>$tipo->nombre</td>";
        			   echo "<td>$tipo->descripcion</td>";
        			   echo "<td>";
        			   echo " <a href='/tipo/show/$tipo->id'><i class='fas fa-search' style='color:black'></i></a>";
        			   echo " - <a href='/tipo/edit/$tipo->id'><i class='fas fa-edit' style='color:black'></i></a>";
        			   echo " - <a href='/tipo/delete/$tipo->id'><i class='fas fa-trash-alt' style='color:black'></i></a>";
        			   echo "</td>";
        			   echo "</tr>";
        		}?>
    		</table>
			</div>
		</div>
		<br><br><br><br><br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>

