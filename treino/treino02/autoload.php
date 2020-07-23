<?php

     spl_autoload_register(function($class){
          $files = __DIR__.'\\classes\\'.$class.".php";
          if(file_exists($files)){
               require($files);
          }
     })

?>