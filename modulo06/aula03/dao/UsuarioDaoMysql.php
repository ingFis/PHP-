<?php

     //CRIANDO UM DAO NA PRÁTICA (1 e 2/5)

     require_once('interfaces/UsuarioDAO.php');
     require_once('models/Usuario.php');

     class UsuarioDaoMysql implements UsuarioDAO
     {
          private $pdo;

          public function __construct(PDO $engine)
          {
               $this->pdo = $engine;
          }
     
          //CRIANDO UM DAO NA PRÁTICA (3/5)
          public function add(Usuario $usuario)
          {
               $sql = $this->pdo->prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email)');
               $sql->bindValue(':nome', $usuario->getNome());
               $sql->bindValue(':email', $usuario->getEmail());
               $sql->execute();

               //pega o último id add e coloca no objeto
               $usuario->setId($this->pdo->lastInsertId());

               return $usuario;
          }

          //CRIANDO UM DAO NA PRÁTICA (1 e 2/5)
          public function findAll()
          {
               $array = [];

               $sql = $this->pdo->query('SELECT * FROM usuarios');
               if($sql->rowCount() > 0){
                    $data = $sql->fetchAll();

                    //cria um objeto para cada item
                    foreach($data as $item){
                         $usuario = new Usuario();
                         $usuario->setId($item['id']);
                         $usuario->setNome($item['nome']);
                         $usuario->setEmail($item['email']);

                         $array[] = $usuario;
                    }
                    return $array;
               }
               
              
          }

          //CRIANDO UM DAO NA PRÁTICA (4/5)
          public function findById($id)
          {
               $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
               $sql->bindValue(':id', $id);
               $sql->execute();

               if($sql->rowCount() > 0)
               {
                    $data = $sql->fetch();
                    $usuario = new Usuario();
                    $usuario->setId($data['id']);
                    $usuario->setNome($data['nome']);
                    $usuario->setEmail($data['email']);

                    return $usuario;
               }else{
                    return false;
               }
          }

          //CRIANDO UM DAO NA PRÁTICA (3/5)
          public function findByEmail($email)
          {
               $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE email=:email');
               $sql->bindValue(':email', $email);
               $sql->execute();

              if($sql->rowCount() === 0)
              {
                   return false;
              }else{
               // se achou ele cria e retorna o objeto com os dados cadastrados
                   $data = $sql->fetch();

                   $usuario = new Usuario();
                   $usuario->setId($data['id']);
                   $usuario->setNome($data['nome']);
                   $usuario->setEmail($data['email']);

                   return $usuario;
              }
          }

          //CRIANDO UM DAO NA PRÁTICA (4/5)
          public function update(Usuario $usuario)
          {
               $sql = $this->pdo->prepare('UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id');
               $sql->bindValue(':nome', $usuario->getNome());
               $sql->bindValue(':email', $usuario->getEmail());
               $sql->bindValue(':id', $usuario->getId());
               $sql->execute();

               return true;
          }

          //CRIANDO UM DAO NA PRÁTICA (5/5)
          public function delete($id)
          {
               $sql = $this->pdo->prepare('DELETE FROM usuarios WHERE id=:id');
               $sql->bindValue(':id', $id);
               $sql->execute();
          }
     }


?>