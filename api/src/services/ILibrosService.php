<?php
namespace App\services;

use App\DTO\LibroDTO;

interface ILibrosService {

    public static function read();
    public static function find($id);
    public static function findAutor($idAutor);
    public static function insert($libro);
}