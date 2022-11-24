<?php
namespace App\DAO;

use App\DTO\LibroDTO;

interface ILibrosDAO {    

    public static function create(LibroDTO $actor): int;
    public static function read(): array;
    public static function findById(int $id): LibroDTO;
    public static function findByAutor(int $id);

}