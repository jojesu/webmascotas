<?php

class RazaController{
    // operación por defecto
    public function index(){
        $this->list(); // listado de razas
    }
    
    // lista los razas
    public function list(){
        
        // solamente el administrador
        //if(!Login::isAdmin())
         //   throw new Exception('No tienes permiso para hacer esto');
            
            $razas = Raza::get();
            include 'views/raza/lista.php';
    }
    
    
    
    // muestra una raza
    public function show(int $id = 0){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || Login::get()->id == $id))
            throw new Exception('No tienes los permisos necesarios');
            
            //Pasamos a la vista la raza
            $raza = Raza::getById($id);
            // recuperar el usuario
            if(!$raza)
                throw new Exception("No se pudo recuperar la raza.");
                
                include 'views/raza/detalles.php';
    }
    
    
    
    
    // muestra el formulario de nueva raza
    public function create(){
        if(!Login::isAdmin())
            throw new Exception('No tienes permiso para hacer esto');
        
        //le pasamos a la vista la lista de tipos para el select
        $tipos = Tipo::get();  
            
        include 'views/raza/nuevo.php';
    }
    
    // guarda la nueva raza
    public function store(){
        
        // comprueba que llegue el formulario con los datos
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron datos');
            
            $raza = new Raza(); //crear la nueva raza
            
            $raza->nombre = DB::escape($_POST['nombre']);
            $raza->descripcion = DB::escape($_POST['descripcion']);
            $raza->idtipo = $_POST['idtipo'];
           
            if(!$raza->guardar())
                throw new Exception("No se pudo guardar $raza->nombre");
                
                $mensaje="Guardado de la raza $raza->nombre correcto.";
                include 'views/exito.php'; //mostrar éxito
    }
    
    
    //ACTUALIZAR SE HACE EN DOS PASOS
    
    // muestra el formulario de edición de una raza
    public function edit(int $id = 0){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(!Login::isAdmin()) 
            throw new Exception('No tienes los permisos necesarios');
        
            
        //Pasamos a la vista la raza
        $raza = Raza::getById($id);
        // recuperar el usuario
        if(!$raza)
            throw new Exception("No se pudo recuperar la raza.");
   
                
      // mostrar el formulario de edición
       include 'views/raza/actualizar.php';
    }
    
    
    // aplica los cambios de raza
    public function update(){
        
        //le pasamos la raza a la vista
        $raza = Raza::getById($_POST['id']);
        
        // esta operación solamente la puede hacer el administrador
        
        if(! (Login::isAdmin() || (Login::hasPrivilege(100))))
            throw new Exception('No tienes los permisos necesarios');
            
       // comprueba que llegue el formulario con los datos
       if(empty($_POST['update']))
          throw new Exception('No se recibieron datos');
                
       $id = intval($_POST['id']); // recuperar el id vía POST
                
       // recuperar la raza
       if(!$raza = Raza::getById($id))
         throw new Exception("No existe la raza $id.");
                    
       $raza->nombre = DB::escape($_POST['nombre']);
       $raza->descripcion = DB::escape($_POST['descripcion']);
       $raza->idtipo = $_POST['idtipo'];
                 
       // intenta realizar la actualización de datos
       if($raza->update()===false)
          throw new Exception("No se pudo actualizar $raza->nombre");
                           
       // prepara un mensaje
       $GLOBALS['mensaje'] = "Actualización de la raza $raza->nombre correcta.";
                            
       // repite la operación edit, así mantiene la vista de edición.
       $this->edit($raza->id);
    }
        
    // muestra el formulario de confirmación de eliminación
    public function delete(int $id = 0){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || (Login::hasPrivilege())))
            throw new Exception('No tienes los permisos necesarios');
            
            // recupera el usuario para mostrar sus datos en la vista
            if(!$raza = Raza::getById($id))
                throw new Exception("No existe la raza $id.");
                
                // carga la vista de confirmación de borrado
                include 'views/raza/borrar.php';
    }
    
    //elimina el usuario
    public function destroy(){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || (Login::hasPrivilege())))
            throw new Exception('No tienes los permisos necesarios');
            
            //recuperar el identificador vía POST
            $id = empty($_POST['id'])? 0 : intval($_POST['id']);
            
            // borra el usuario de la BDD
            if(!Raza::borrar($id))
                throw new Exception("No se pudo eliminar la raza $id");
                
                $mensaje = "La raza ha sido borrada correctamente.";
                
                include 'views/exito.php'; //mostrar éxito
    }   
    
}

