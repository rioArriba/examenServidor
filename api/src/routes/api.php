<?php
$router = new \Bramus\Router\Router();


$router->setNamespace('\App');

/**
 * Definimos nuestras rutas
 */
$router->get('/', function() { echo "Bienvenido a la API de películas"; });
$router->get('/peliculas', 'controllers\MoviesController@all');
$router->get('/peliculas/(\d+)', 'controllers\MoviesController@find');
$router->get('/peliculas/(\d+)/criticas', function($id) { include __DIR__ . "/../app/pelicula_criticas.php"; });
$router->get('/peliculas/(\d+)/actores', function($id) { include __DIR__ . "/../app/pelicula_actores.php"; });
$router->post('/peliculas', 'controllers\MoviesController@insert');
$router->delete('/peliculas/(\d+)', 'controllers\MoviesController@delete');
$router->put('/peliculas/(\d+)', 'controllers\MoviesController@update');
$router->set404(function() {
    http_response_code(404);
    echo json_encode(['Message' => 'Recurso no encontrado']);
});
$router->get('/libros', 'controllers\LibrosController@all');
$router->get('/libros/(\d+)', 'controllers\LibrosController@find');
$router->post('/libros', 'controllers\LibrosController@insert');

$router->get('/libros/autor/(d+)', 'controllers\LibrosController@findAutor');
$router->run();