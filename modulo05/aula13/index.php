<?php
     //Composer - gerenciador de dependência - usa packagist repositório de códigos PHP, 
     //que poderá ser utilizado no projeto

     //composer --version

     //1º criar composer.json, 2º no terminal: composer install

     //usar alguma biblioteca no packagist: composer require nome, 1º ele baixa os arquivos
     //e insere na pasta vendor, 2º modifica o composer.json, insere a referencia da biblioteca, 
     //3º gera o autoload novamente para puxar a biblioteca

     require 'vendor/autoload.php';

     //Exemplo de uso classe monolog
     use classes\matematica\Basica;
     use Monolog\Logger;
     use Monolog\Handler\StreamHandler;

     // create a log channel
     $log = new Logger('name');
     $log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

     $mat = new Basica();
     echo $mat->somar(5, 6);

     // add records to the log
     $log->warning('Foo');
     $log->error('Bar');

     /*
     Add no composer.json para usar as minhas classes

     "autoload": {
          "psr-4": {
               "classes\\": "classes/"
          }
     }
     
     "classes\\" - referencia o namespace
     "classes/" - pasta

     depois no terminal: composer dump-autoload (gera o autoload outra vez)

     */

?>