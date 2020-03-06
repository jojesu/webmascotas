<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de usuarios</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
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
		  (TEMPLATE)::header("Nueva Raza");
		  (TEMPLATE)::nav();
		?>  
		
	   <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Crea un nueva raza</h1>
                  </div>
                  <form class="user" method="post" action="/raza/store">                   
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nombre" id="exampleInputEmail" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input type="textarea" class="form-control form-control-user" name="descripcion" id="exampleInputEmail" placeholder="Descripción">
                    </div>
                    <div class="row">
                        <label class="col-md-4">Tipo:</label>
            			<select name='idtipo' class="form-control col-md-4" value='<?=$tipo->id?>'>
            			<?php 
            			foreach ($tipos as $tipo)
            			    echo "<option value='$tipo->id' name='$tipo->nombre'>$tipo->nombre</option>";
            			?>
            			</select>
        			</div>
        			<hr>
                    <input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-user btn-block">
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>
			
		<?php 
		  (TEMPLATE)::footer();
		?>
    		
	</body>
</html>








