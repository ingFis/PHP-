<?php

//ENCRIPTAÇÃO DE SENHAS

$senha = '1234';

//PASSWORD_DEFAULT - tipo de processo para encriptar - Gerar o hash mais conveniente atualmente 60 - 255 caracteres
//PASSWORD_BCRYPT - usa um método específico - 60 caracteres

$hash = password_hash($senha, PASSWORD_DEFAULT); 

//md5 - 32 caracteres - mesmo sempre - mínima possibilidade de strings diferentes usarem a mesma hash
$hash2 = md5($senha);

echo "SENHA: ".$senha."<br>";
echo "HASH: ".$hash."<br>";

?>
