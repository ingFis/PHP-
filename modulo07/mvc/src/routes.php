<?php
use core\Router;

$router = new Router();

// criando rotas: ('/-caminho', classeController@metodo)

$router->get('/', 'HomeController@index');

$router->get('/fotos', 'HomeController@fotos');
// Rota dinâmica
$router->get('/foto/{id}', 'HomeController@foto');

$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');