<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de tipos de mascotas</title>
		
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Lista de tipos de mascotas");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		<h2>Lista de tipos de mascotas</h2>
			
		<table border="1">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
			</tr>
    		<?php foreach($tipos as $tipo){
    			   echo "<tr>";
    			    
    			   echo "<td>$tipo->nombre</td>";
    			   echo "<td>$tipo->descripcion</td>";
    			  
    			   echo "<td>";
    			   echo " <a href='/tipo/show/$tipo->id'>Ver</a>";
    			   echo "-<a href='/tipo/edit/$tipo->id'>Actualizar</a>";
    			   echo "-<a href='/tipo/delete/$tipo->id'>Borrar</a>";
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
