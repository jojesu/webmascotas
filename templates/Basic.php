<?php

class Basic{
    // pone el header
    public static function header(string $pagina = ''){?>
        <!-- Jumbotron Header -->
            <header class="my-4">
              <h4 class="display-4"><?=$pagina?>!</h4>
            </header>
        <?php }
        
        // pone el nav
        public static function nav(){?>
         <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
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
              <div class="collapse navbar-collapse bg-light">
              <?php (TEMPLATE)::login();?>
              </div>
            </div>
          </nav>
        <?php } 
        
        // pone el login/logout       
        public static function login(){
            // recupera el usuario identificado mediante el modelo Login
            $identificado = Login::get();
            
            // el enlace depende de si el usuario está identificado o no
           echo $identificado ?
                "<li class='nav-item'>Hola <a class='nav-link' href='/usuario/show/$identificado->id'>$identificado->usuario</a>, 
                    <a class='nav-link' href='/login/logout'>salir</a></li>" :
                "<li class='nav-item'><a class='nav-link' href='/login'>Identificarse</a> - <a class='nav-link' href='/usuario/create'>Registro</a></li>";
                
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
    
    