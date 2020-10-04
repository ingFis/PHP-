<?php

// alterar header - permite que outros sites acessem a api
header("Access-Control-Allow-Origin: *");

// tipos de métodos aceitos - padrão GET e POST
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS");

// avisa o tipo de retorno
header("Content-Type: application/json");

// json_encode - transforma array em json
echo json_encode($array);
exit;

?>