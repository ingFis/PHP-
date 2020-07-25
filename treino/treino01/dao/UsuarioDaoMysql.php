<?php
     require_once('models/Usuario.php');

     class UsuarioDaoMysql implements UsuarioDAO
     {
          private $pdo;

          public function __construct(PDO $engine)
          {
               $this->pdo = $engine;
          }
          
          public function add(Usuario $usuario)
          {

          }

          public function findAll()
          {

               $array = [];
               $sql = $this->pdo->query('SELECT * FROM usuarios');
               $data = $sql->fetchAll();
               
               
               foreach($data as $item){
                    $usuario = new Usuario();
                    $usuario->setId($item['id']);
                    $usuario->setNome($item['nome']);
                    $usuario->setEmail($item['email']);

                    $array[] = $usuario;
               }

               return $array;

          }

          public function findById($id)
          {

          }

          public function update(Usuario $usuario)
          {

          }

          public function delete($id)
          {

          }
     }


?>