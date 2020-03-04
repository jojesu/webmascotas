<?php

class FotoController{
    //propiedades
    public $id='', $fichero='', $ubicacion='', $idmascota='';
    
    //METODOS
    // operación por defecto
    public function index(){
        $this->list(); // listado de fotos
    }
    
    // lista las fotos
    public function list(){
        
        $fotos = Foto::get();
        
        $usuarios = Usuario::get();
        
        $razas = Raza::get();
        
        $tipos = Tipo::get();
        
        $mascotas = Mascota::get();
        
        include 'views/foto/lista.php';
  
    }
        
    // muestra el formulario de confirmación de eliminación
    public function delete(int $id = 0){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || Login::get()->id == $id))
            throw new Exception('No tienes los permisos necesarios');
            
            // recupera el usuario para mostrar sus datos en la vista
            //if(!$usuario = Usuario::getById($id))
              //throw new Exception("No existe el usuario $id.");
                
                // carga la vista de confirmación de borrado
                include 'views/foto/borrar.php';
    }
    
    //elimina la foto
    public function destroy(){
        
        // esta operación solamente la puede hacer el administrador
        // o bien el usuario propietario de los datos que se muestran
        if(! (Login::isAdmin() || Login::get()->id == $id))
            throw new Exception('No tienes los permisos necesarios');
            
            //recuperar el identificador vía POST
            $id = empty($_POST['id'])? 0 : intval($_POST['id']);
            
            // borra el usuario de la BDD
            if(!Foto::borrar($id))
                throw new Exception("No se pudo borrar la foto $id");
                
                $mensaje = "La foto ha sido borrada correctamente.";
                
                include 'views/exito.php'; //mostrar éxito
    }
    
}

