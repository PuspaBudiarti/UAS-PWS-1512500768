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
    return $router->app->version();
});

$router->get('/mhspulu', 'MhsController@index');
$router->get('/mhspulu/{id}', 'MhsController@showmahasiswa');
$router->post('/mhspulu', 'MhsController@storemahasiswa');
$router->put ('/mhspulu/{id}', 'MhsController@updatemahasiswa');
$router->delete('/mhspulu/{id}', 'MhsController@destroymahasiswa');
