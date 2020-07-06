<?php

//MÉTODO CONSTRUTOR - executa toda vez que um objeto é criado

     class Post{
          //com o private as propriedades só poderão ser alteradas 
          //pelos gets e sets e neles serão feitos tratamentos devidos
          private $likes = 0;
          private $coments = [];
          private $author;

          //define propriedades iniciais do objeto - primeiro método a ser executado
          public function __construct($qtdLikes){
               $this->likes = $qtdLikes;
          }

          //ENCAPSULAMENTO - get
          public function getAuthor(){
               return $this->author ?? "Anônimo";
          }

          //ENCAPSULAMENTO - set 
          public function setAuthor($nome){
               $this->author = ucfirst($nome);
          }

          public function aumentarLikes(){
               $this->likes++;
          }

     }

     $post1 = new Post(32);
     $post1->setAuthor("ingrid");
     
     echo "Post1 - Autor: ".$post1->getAuthor()."<br>";

//ENTENDENDO ENCAPSULAMENTO - Proteger as propriedades de acesso externo ou de modificações 
// set e get - da controle para tratamentos de propriedades

?>