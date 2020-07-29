<?php
use core\Router;

$router = new Router();

//Todas as rotas

//get - cria uma requisição do tipo get - 1º Rota, 2º Especificar o nome da classe
//do controller e método que vai ser acessado

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/fotos', 'HomeController@fotos');

//Rotas dinâmicas
$router->get('/foto/{id}', 'HomeController@foto');