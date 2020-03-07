<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de usuarios</title>
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
		  (TEMPLATE)::header("Registro de usuarios");
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
                    <h1 class="h4 text-gray-900 mb-4">Crea una Cuenta</h1>
                  </div>
                  <form class="user" method="post" action="/usuario/store">
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control form-control-user" name="usuario" id="exampleFirstName" placeholder="Usuario">
                      </div>
                      <div class="col-sm-6 mb-3">
                        <input type="text" class="form-control form-control-user" name="nombre" id="exampleFirstName" placeholder="Nombre">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="apellido1" id="exampleFirstName" placeholder="Apellido">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" name="apellido2" id="exampleLastName" placeholder="Apellido">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" placeholder="Email">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" name="clave" id="exampleInputPassword" placeholder="Password">
                      </div>
                    </div>
                    <input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-user btn-block">
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/forgotpassword">¿Olvidaste tu Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/login">¿Ya tienes cuenta? Login!</a>
                  </div>
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








