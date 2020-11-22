<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Hola mundo!';
});

$router->get('/phpinfo', function () use ($router) {
    return phpinfo();
});

$router->get('/users', function () use ($router) {
    return response()->json([
        [
            'name' => 'Cobas',
            'edad' => '27'
        ],
        [
            'name' => 'Pepito',
            'edad' => '40'
        ]
    ]);
});

$router->get('/productos', ['as' => 'productos', 'uses' => 'ProductosController@index']);
$router->get('/productos/{id}', ['as' => 'productos.show', 'uses' => 'ProductosController@show']);