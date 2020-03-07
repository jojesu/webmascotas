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
		  (TEMPLATE)::header("Usuarios");
		  (TEMPLATE)::nav();
		?> 
		<div class="container"> 
			<br>
    		<h2>Lista de razas</h2>			
    		<table class="table">
    			<tr>
    				<th>Nombre</th>
    				<th>Descripción</th>
    				<th>Operaciones</th>
    			</tr>
        		<?php foreach($razas as $raza){
        			   echo "<tr>";
        			   echo "<td>$raza->nombre</td>";
        			   echo "<td>$raza->descripcion</td>";
        			   echo "<td>";
        			   echo " <a href='/raza/show/$raza->id'>VER</a>";
        			   echo " - <a href='/raza/edit/$raza->id'>ACTUALIZAR</a>";
        			   echo " - <a href='/raza/delete/$raza->id'>BORRAR</a>";
        			   echo "</td>";
        			   echo "</tr>";
        		}?>
    		</table>
    		<h2>Lista de tipos</h2>			
    		<table class="table">
    			<tr>
    				<th>Nombre</th>
    				<th>Descripción</th>
    				<th>Operaciones</th>
    			</tr>
        		<?php foreach($tipos as $tipo){
        			   echo "<tr>";
        			   echo "<td>$tipo->nombre</td>";
        			   echo "<td>$tipo->descripcion</td>";
        			   echo "<td>";
        			   echo " <a href='/tipo/show/$tipo->id'>VER</a>";
        			   echo " - <a href='/tipo/edit/$tipo->id'>ACTUALIZAR</a>";
        			   echo " - <a href='/tipo/delete/$tipo->id'>BORRAR</a>";
        			   echo "</td>";
        			   echo "</tr>";
        		}?>
    		</table>
		</div>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
