<?php

$senha = '1234';

$hash = '$2y$10$v7inyqIfeBLTSGeWJGayz.I6.PTzBqT7RAlkeCl2a9Tpj4KfvQBxW';

if(password_verify($senha, $hash)){
     echo "SENHA CORRETA";
}else{
     echo "SENHA INCORRETA";
}

?>