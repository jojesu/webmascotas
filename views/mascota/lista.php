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
				<th>Nacimiento</th>
			</tr>
    		<?php foreach($mascotas as $mascota){
    			   echo "<tr>";
    			   echo "<td>$mascota-</td>";  //recuperar imagen
    			   echo "<td>$mascota->nombre</td>";
    			   echo "<td>$mascota->sexo</td>";
    			   echo "<td>$mascota->biografia</td>";
    			   echo "<td>$mascota->Nacimiento</td>";
    			   echo "<td>$mascota->Fallecimiento</td>";
    			  
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
