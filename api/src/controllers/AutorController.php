<?php
namespace App\controllers;

use App\DTO\MovieDTO;
use App\response\HTTPResponse;
use App\factories\AutorFactory;
use App\services\IAutorService;

class AutorController {

    private IAutorService $service;

	function __construct() {
        $this->service = AutorFactory::getService();
	}   

    public function find($id){
        try {
            $respuesta = AutorFactory::getService()::find($id);
            //echo json_encode($this->service->find($id));
        } catch (\Throwable $th) {
            HTTPResponse::json(404, $th->getMessage());
            //echo json_encode($th->getMessage());
        }
        return $respuesta;
    }
}
