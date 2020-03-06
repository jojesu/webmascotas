<?php

class Foto{
    //PROPIEDADES
    public $id='', $ubicacion='', $fichero='', $idmascota='';
    
    //METODOS
    
    public function guardar(){
        
        $consulta="INSERT INTO fotos(fichero, ubicacion, idmascota)
                     VALUES('$this->fichero','$this->ubicacion', '$this->idmascota')";
        
        return DB::insert($consulta); //conectar y ejecutar
    }
    
    public static function getFotosMascota(int $id):array{
        $consulta="SELECT f.fichero, f.ubicacion, m.nombre, m.id  FROM fotos f
                    LEFT JOIN mascotas m ON m.id=f.idmascota           
                    WHERE idmascota=$id"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    
    // recuperar todas las fotos
    public static function get():array{
        $consulta="SELECT * FROM fotos"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    // recuperar todas las fotos
    public static function getUltimas(int $ultimas):array{
        $consulta="SELECT * FROM fotos
                    order by id desc
                    limit $ultimas"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    
    // recuperar una foto concreta por id
    public static function getById(int $id):?Foto{
        $consulta="SELECT * FROM fotos WHERE id=$id";
        return DB::select($consulta, self::class);
    }
    
    //recuperar fotos con un filtro
    public static function getFiltered(
        string $c='', string $v='', string $o='id', string $s='ASC'):array{
            
     $consulta="SELECT * FROM fotos WHERE $c LIKE '%$v%' ORDER BY $o $s";
     return DB::selectAll($consulta, self::class);
    }
    
    //borrar una foto existente
    public static function borrar(int $id){
        $consulta="DELETE FROM fotos WHERE id=$id;";
        return DB::delete($consulta);
    }
    
    //__toString
    public function __toString():string{
        return "$this->id: $this->fichero $this->ubicacion $this->idmascota";
    }
    
}

