<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Jeiner

$router->post('login/','AuthController@getApiToken'); /*Jeiner*/

$router->group(['middleware' => ['auth']], function () use ($router){

});

$router->get('listar-categorias/','GustosController@listarCategoria'); /*Jeiner*/

$router->post('seleccionar-subcategoria/','GustosController@seleccionar_subcategoria'); /*Jeiner*/
