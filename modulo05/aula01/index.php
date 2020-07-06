<?php
//INTRODUÇÃO À ORIENTAÇÃO À OBJETOS - sistema feito com objetos

//DEFININDO CLASSES E OBJETOS

     //class - definição de um objeto - propriedades e métodos(molde)
     class Post{
          //propriedades
          public int $likes = 0;
          public array $coments = [];
          public string $author;

          //método
          public function aumentarLikes(){
               //$this - próprio item
               $this->likes++;
          }
     }

     //objeto - instancia de uma classe - transforma a classe em algo concreto
     $post1 = new Post();
     $post1->likes = 3;
     $post1->aumentarLikes();

     $post2 = new Post();
     $post2->likes = 10;

     echo "POST1: ".$post1->likes."<br><br>";
     echo "POST1: ".$post2->likes."<br><br>";

//DEFININDO PROPRIEDADES E MÉTODOS

     //atributos - características que um objeto do tipo da classe vai ter
     //public private protected

     //métodos - o que um objeto do tipo da classe poderá fazer

//TYPED PROPERTIES(7.4) - proteger o tipo de entrada numa propriedade


?>