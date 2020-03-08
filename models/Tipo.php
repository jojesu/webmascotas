<?php
// Clase Tipo del modelo
class Tipo{
    
    // PROPIEDADES
    public $id=0, $nombre='', $descripcion='';
    
    //METODOS DEL CRUD
    
    //recuperar todos los tipos
    public static function get():array{
        $consulta="SELECT * FROM tipos"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    //recuperar los tipos de mascotas de un usuario
    public static function getAdUser(int $idusuario):array{
        $consulta="SELECT * FROM tipos WHERE idusuario=$idusuario"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    //recuperar un tipo de mascota concreta por id
    public static function getTipo(int $id):?Tipo{
        $consulta="SELECT * FROM tipos WHERE id=$id"; //preparar la consulta
        return DB::select($consulta, self::class); //ejecutar y retornar el resultado
    }
    
    public function guardar(){ //insertar un nuevo tipo de raza
        $consulta="INSERT INTO tipos(nombre, descripcion)
            VALUES('$this->nombre', '$this->descripcion')";
        return DB::insert($consulta);
    }
    
    public static function borrar(int $id){ //borrar un tipo de raza por id
        //preparar consulta
        $consulta="DELETE FROM tipos WHERE id=$id";
        //ejecutar consulta
        return DB::delete($consulta);
    }
    
    public function update(){ //actualizar una mascota
        //preparar consulta
        $consulta="UPDATE mascotas SET
                    nombre='$this->nombre',
                    descripcion='$this->descripcion'
                   WHERE id=$this->id";
        return DB::update($consulta);
    }
    
    public function __toString():string{  //__toString
        return "$this->id, '$this->nombre', '$this->descripcion'";
    }
    
    //recuperar tipos con un filtro avanzado
    public static function getFiltered(string $campo='titol', string $valor='', string $orden='id',
        string $sentido='ASC'):array{
            $consulta="SELECT * FROM tipos
                   WHERE $campo LIKE '%$valor%'
                   ORDER BY $orden $sentido";
            return DB::selectAll($consulta, self::class);
    }
    
}