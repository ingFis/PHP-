<?php

     //CRIANDO UM DAO NA PRÁTICA (1 e 2/5)

     interface UsuarioDAO
     {
          public function add(Usuario $usuario);
          public function findALl();
          public function findById($id);
          public function update(Usuario $usuario);
          public function delete($id);

          //CRIANDO UM DAO NA PRÁTICA (3/5)
          public function findByEmail($email);
     }

?>