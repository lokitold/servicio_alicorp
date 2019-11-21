<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Jeiner

$router->post('login/','AuthController@getApiToken'); /*Jeiner*/

$router->group(['middleware' => ['auth']], function () use ($router){

});
$router->get('perfil/','PerfilController@listarUsuarioActivo'); /*Jeiner*/
$router->get('listar-categorias/','GustosController@listarCategoria'); /*Jeiner*/
$router->post('seleccionar-subcategoria/','GustosController@seleccionar_subcategoria'); /*Jeiner*/
$router->get('Bandeja-de-archivos/','GustosController@listar_archivos'); /*Jeiner*/
$router->post('adjuntar-archivos/', 'ArchivoController@adjuntarArchivo');
$router->post('ver-archivo', 'ArchivoController@visualizarArchivo');
