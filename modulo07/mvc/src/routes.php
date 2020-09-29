<?php
use core\Router;

$router = new Router();

// criando rotas: ('/-caminho', classeController@metodo)

$router->get('/', 'HomeController@index');

// $router->get('/fotos', 'HomeController@fotos');

// // Rota dinâmica
// $router->get('/foto/{id}', 'HomeController@foto');

// $router->get('/sobre/{nome}', 'HomeController@sobreP');
// $router->get('/sobre', 'HomeController@sobre');


//CREATE 
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');