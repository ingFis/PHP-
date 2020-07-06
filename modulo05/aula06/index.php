<?php

//ENTENDENDO INTERFACE - modelo de implementação de uma classe - guia - para controle de qualidade
//utilizado quando algumas classes irão utilizar os mesmo métodos
     
     Interface Database{
          //leitura, escrita, alteração, remoção

          public function listarProdutos();
          public function adicionarProduto();
          public function alterarProduto();
          public function deletarProduto();
     }

     class MysqlDB implements Database{
          public function listarProdutos(){
               echo "Listando com MysqlDB";
          }

          public function adicionarProduto(){

          }

          public function alterarProduto(){

          }

          public function deletarProduto(){

          }
     }    

     class OracleDB implements Database{
          public function listarProdutos(){
               echo "Listando com OracleDB";
          }

          public function adicionarProduto(){

          }

          public function alterarProduto(){

          }

          public function deletarProduto(){

          }
     }

     $db = new MysqlDB();
     $db->listarProdutos();


?>