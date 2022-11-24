<?php
namespace App\factories;

use App\services\IAutorService;
use App\DAO\IAutorDAO;
use App\services\impl\AutorService;
use App\DAO\impl\AutorDAO;


class AutorFactory {

    public static function getService(): IAutorService{
        return new AutorService();
    }

    public static function getDAO(): IAutorDAO {
        //return new MoviesStaticDAO();
        return new AutorDAO();
    }

}