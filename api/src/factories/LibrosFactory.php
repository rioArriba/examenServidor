<?php

namespace App\factories; 
 
use App\DAO\impl\LibrosDAO;
use App\services\impl\LibrosService;

 class LibrosFactory {

    public static function getService() {
        return new LibrosService();
    }

    public static function getDAO() {
        return new LibrosDAO();
    }
 }