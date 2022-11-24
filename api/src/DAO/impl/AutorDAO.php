<?php
namespace App\DAO\impl;

use App\DAO\IAutorDAO;

class AutorDAO implements IAutorDAO
{
	static private string $pathJson;
    
 	/**
	 */
	function __construct() {
		self::$pathJson = base_path('data');
	}

	
	public static function findById(int $id) {
		$autores = json_decode(file_get_contents(self::$pathJson.'/autores.json'), false);
        $autor = array_filter($autores, function($elemento) use ($id){ return $elemento->id() == $id; });
        if(!empty($autor)) {
			return reset($autor);
        }

        throw new \Exception("No se ha encontrado al autor");		
	}

}
