<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    // view dinâmico
    public function index() {
        $nome = "Ingrid";
        $idade = 22;
        $posts = [
            ['titulo'=> 'Post 01', 'corpo' => 'Conteúdo...'],
            ['titulo'=> 'Post 02', 'corpo' => 'Conteúdo...'],
            ['titulo'=> 'Post 03', 'corpo' => 'Conteúdo...'],
        ];

        // carregar um view
    $this->render('home', 
            // Envia para o view cada chave vira uma variável
            [
                'nome' => $nome,
                'idade'=> $idade,
                'posts'=> $posts
            ]
        );
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        echo "Bem-vindo(a), ".$args['nome'];
    }

    public function fotos()
    {
        echo "Exibindo fotos...";
    }

    // Rota dinâmica 
    public function foto($args)
    {
        echo "Exibindo a foto: ".$args['id'];
    }

}