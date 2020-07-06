<?php

//ENTENDENDO HERANÇA

     class Post{
          private $id;
          private $likes = 0;

          public function setId($id){
               $this->id = $id;
          }

          public function getId(){
               return $this->id;
          }

          public function setLikes($likes){
               $this->likes = $likes;
          }

          public function getLikes(){
               return $this->likes;
          }
     }

     // classe Foto vai herdar tudo de classe Post
     class Foto extends Post{
          private $url;

          public function __construct($id){
               $this->setId($id);
          }

          public function setUrl($url){
               $this->url = $url;
          }

          public function getUrl(){
               return $this->url;
          }
     }

     $foto = new Foto(20);
     $foto->setLikes(27);

     echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes";

/*PROPRIEDADE PRIVATE E PROTECTED
     private - só pode ser acessada na classe mãe
     protected - permite acessos nas classes que herdam 

     pode subscrever métodos
*/
?>