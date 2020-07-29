<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    //método que eu chamo na primeira rota
    public function index() {
        //carrega um view
        $this->render('home', ['nome' => 'Ingrid']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function fotos()
    {
        $this->render('fotos');
    }

    public function foto($parametros)
    {
        echo "Exibindo foto: ".$parametros['id'];
    }

}