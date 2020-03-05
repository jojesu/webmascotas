<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de mascotas</title>
		
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Lista de mascotas");
		  (TEMPLATE)::nav();
		  (TEMPLATE)::login();
		?>  
		<h2>Lista de mascotas</h2>
			
		<table border="1">
			<tr>
				<th>Nombre</th>
				<th>Sexo</th>
				<th>Biografía</th>
				<th>Nacimiento</th>
				<th>Fallecimiento</th>
			</tr>
    		<?php foreach($mascotas as $mascota){
    			   echo "<tr>";
    			    
    			   echo "<td>$mascota->nombre</td>";
    			   echo "<td>$mascota->sexo</td>";
    			   echo "<td>$mascota->biografia</td>";
    			   echo "<td>$mascota->fechanacimiento</td>";
    			   echo "<td>$mascota->fechafallecimiento</td>";
    			  
    			   echo "<td>";
    			   echo " <a href='/mascota/show/$mascota->id'>Ver</a>";
    			   echo "-<a href='/mascota/edit/$mascota->id'>Actualizar</a>";
    			   echo "-<a href='/mascota/delete/$mascota->id'>Borrar</a>";
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
