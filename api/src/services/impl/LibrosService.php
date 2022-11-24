<?php
namespace App\services\impl;

use App\factories\LibrosFactory;
use App\services\ILibrosService;

class LibrosService implements ILibrosService {

    public static function read() {
        return LibrosFactory::getDAO()::read();
    }
    public static function find($id) {
        return LibrosFactory::getDAO()::findById($id);
    }
    public static function insert($libro) {
        return LibrosFactory::getDAO()::create($libro);
    }
    
    public static function findAutor($idAutor) {
        return LibrosFactory::getDAO()::findById($idAutor);
    }
}