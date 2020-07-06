<?php
     $idade = 21;

     //CONDICIONAL IF
     /*
          ==, !=, >, >=, <, <=        
     */

     if($idade >= 18){
          echo "Maior de idade <br><hr>";
     }else{
          echo "Menor de idade <br><hr>";
     }

     //CONDICIONAL TERNÁRIO

     $permissaoAcesso = ($idade >= 18) ? TRUE : FALSE;
     echo ($permissaoAcesso) ? "Acesso permitido!" : "Acesso negado!";

     echo "<br><br><hr>";

     //CONDICIONAL NULL CAO (coalescing assignment operator)

     $nome = 'Ingrid';
     // $sobrenome = ' Silva';

     $nomeCompleto = $nome;
     // $nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; ternário

     $nomeCompleto .= $sobrenome ?? ''; // null CAO - Apenas o resultado negativo

     echo $nomeCompleto;

     echo "<br><br><hr>";

     //CONDICIONAL SWITCH
     $tipo = 'foto';

     switch($tipo){
          case 'foto':
               echo "Exibindo FOTO";
               break;
          case 'vídeo':
               echo "Exibindo VÍDEO";
               break;
          case 'texto':
               echo "Exibindo TEXTO";
               break;
          default: 
               echo "Sem exibição";
     }



   

?>