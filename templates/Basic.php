<?php

class Basic{
    // pone el header
    public static function header(string $pagina = ''){?>
        <!-- Jumbotron Header -->
            <header class="my-4">
              <h4 class="display-4"><?=$pagina?>!</h4>
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
            </header>
        <?php }
        
        // pone el nav
        public static function nav(){?>
         <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <img src="/img/logo.jpg" width='50' height='50'>
              <a class="navbar-brand" href="/">WEBMASCOTAS</a>         
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                	<a href="/mascota/list"  class="nav-link">Lista de mascotas</a>
                  </li>               
                  <li class="nav-item">
                  <a href="/contacto" class="nav-link">Contactar</a>
                  </li>
                  <?php if(Login::get()){?>
            			<li class="nav-item"><a href="/mascota/create"  class="nav-link">Crear nueva Mascota</a></li>
        		<?php }?>
        		 <?php if(Login::hasPrivilege(500)){?>         		
            			<li><a href="/usuario/list" class="nav-item">Lista de usuarios</a></li>           	
        		<?php }?>
        		
				 <?php if(Login::isAdmin()){?>         	
            			<li><a href="/tipo/list">Lista de razas y Tipos</a></li>
        		<?php }?>
                </ul>
              </div>
              <?php (TEMPLATE)::login();?>
            </div>
          </nav>
        <?php } 
        
        // pone el login/logout       
        public static function login(){
            // recupera el usuario identificado mediante el modelo Login
            $identificado = Login::get();
            
            // el enlace depende de si el usuario está identificado o no
           echo $identificado ?
                " <a href='/usuario/show/$identificado->id'><button type='button' class='btn btn-primary p-2 ml-2' >Hola $identificado->usuario</button></a>
                  <a href='/login/logout'><button type='button' class='btn btn-secondary p-2 ml-2'>Logout</button></a>":                   
                 "<a href='/login'><button type='button' class='btn btn-primary p-2 ml-2' >Identificarse</button></a>
                  <a href='/usuario/create'><button type='button' class='btn btn-secondary p-2 ml-2'>Registro</button></a>";
                
        }
        
        // pone el footer
        public static function footer(){?>
            <footer class="py-1 bg-dark mb-2">
            	<div class="container">
            	<p class="m-0 text-center text-white">WebMascotas Framework 2020</p>
            	<p class="m-0 text-center text-white">Robert@CIFO</p>
            	</div>
            </footer>
        <?php }
    }
    
    