<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    // view dinâmico
    public function index() {
    //     $nome = "Ingrid";
    //     $idade = 22;
    //     $posts = [
    //         ["titulo"=> "Título 01", "conteudo" => "Conteúdo do post 01"],
    //         ["titulo"=> "Título 02", "conteudo" => "Conteúdo do post 02"],
    //         ["titulo"=> "Título 03", "conteudo" => "Conteúdo do post 03"]
    //     ];

    // // carregar um view
    // $this->render('home', 
    // //         // Envia para o view cada chave vira uma variável
    //         [
    //             'nome' => $nome,
    //             'idade'=> $idade,
    //             'posts'=> $posts
    //         ]
    //     );

    // READ
    $usuarios = Usuario::select()->execute();
    $this->render('home', [
        'usuarios' => $usuarios
    ]);
        
    }

    // public function sobre() {
    //     $this->render('sobre');
    // }

    // public function sobreP($args) {
    //     echo "Bem-vindo(a), ".$args['nome'];
    // }

    // public function fotos()
    // {
    //     echo "Exibindo fotos...";
    // }

    // // Rota dinâmica - o parâmetro é o que vier depois de foto/
    // // será um array com o id da foto
    // public function foto($args)
    // {
    //     echo "Exibindo a foto: ".$args['id'];
    // }

}