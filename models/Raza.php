<?php

class Raza{
    // PROPIEDADES
    public $id=0, $nombre='', $descripcion='', $idtipo='';
    
    //METODOS
    // METODOS DEL CRUD
    
    // registrar una nueva raza.
    
    public function guardar(){
        
        $consulta="INSERT INTO razas(nombre, descripcion, idtipo)
                       VALUES('$this->nombre','$this->descripcion', $this->idtipo)";

        return DB::insert($consulta); //conectar y ejecutar
    }
    
    
    //actualizar una raza
    public function actualizar(){
        
        $consulta="UPDATE razas SET
                     nombre='$this->nombre',
                     descripcion='$this->descripcion',
                     idtipo='$this->idtipo'
                    WHERE id=$this->id";
        
        return DB::update($consulta);
    }
    
    
    // recuperar todos los razas
    public static function get():array{
        $consulta="SELECT * FROM razas"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    // recuperar una raza concreto por id
    public static function getById(int $id):?Raza{
        $consulta="SELECT * FROM razas WHERE id=$id";
        return DB::select($consulta, self::class);
    }
    
    //recuperar razas con un filtro
    public static function getFiltered(
        string $c='user', string $v='', string $o='id', string $s='ASC'):array{
            
            $consulta="SELECT * FROM razas WHERE $c LIKE '%$v%' ORDER BY $o $s";
            return DB::selectAll($consulta, self::class);
    }
    
    //borrar una raza existente
    public static function borrar(int $id){
        $consulta="DELETE FROM razas WHERE id=$id;";
        return DB::delete($consulta);
    }
    
    //__toString
    public function __toString():string{
        return "$this->id: $this->nombre $this->descripcion";
    }
    
    
}

