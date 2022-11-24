<?php

namespace App\services\impl;

use App\services\IAutorService;
use App\DAO\IAutorDAO;
use App\factories\AutorFactory;

class AutorService implements IAutorService {

	public static function find($id) {
        return AutorFactory::getDAO()::findById($id);
	}
}
