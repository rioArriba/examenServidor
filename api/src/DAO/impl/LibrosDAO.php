<?php

namespace App\DAO\impl;

use Ciri\db\orm\DB;
use App\DTO\LibroDTO;
use App\DAO\ILibrosDAO;

class LibrosDAO implements ILibrosDAO{

    
    public static function create(LibroDTO $libro): int {
        return DB::table('libros')->insert(['titulo' => $libro->titulo(), 'autor' => $libro->autor(), 'precio' => $libro->precio()]);
     }
    
    public static function read(): array {
        $result = array();        
        $db_data = DB::table('libros')->select('*')->get();
        foreach ($db_data as $libro) {
            $result[] = new LibroDTO(
            $libro->id, 
            $libro->titulo, 
            $libro->autor, 
            $libro->precio
        );            
        }
        return $result;
    }
    public static function findById(int $id): LibroDTO {
        $db_data = DB::table('libros')->find($id);
        $result = new LibroDTO(
                $db_data->id, 
                $db_data->titulo, 
                $db_data->autor, 
                $db_data->precio         
            );         
            return $result;   
    }    

    public static function findByAutor(int $id): LibroDTO {
        $db_data = DB::table('libros')->findAutor($id);
        foreach ($db_data as $libro) {
            $result[] = new LibroDTO(
            $libro->id, 
            $libro->titulo, 
            $libro->autor, 
            $libro->precio
        );         
    }
     return $result;      
    }
}