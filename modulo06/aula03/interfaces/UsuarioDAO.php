<?php

     //CRIANDO UM DAO NA PRÁTICA (1/5)

     interface UsuarioDAO
     {
          public function add(Usuario $usuario);
          public function findALl();
          public function findById($id);
          public function update(Usuario $usuario);
          public function delete($id);
     }

?>