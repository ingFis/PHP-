<?php

//FUNÇÕES NATIVAS DE ARRAY 1/2
     
     //contar itens - count()
     $lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];
     echo "Quantidade de itens: ".count($lista)."<br><br>";

     //Diferença de arrays - retorna o resto - array_diff()
     $listaAlunos = ['Pedro', 'Jorge', 'Paula', 'Ingrid', 'Yasmin'];
     $aprovados = ['Pedro', 'Ingrid', 'Yasmin'];

     $reprovados = array_diff($listaAlunos, $aprovados);
     print_r($reprovados);


     echo "<br><br>";

     //Filtrar um array - recebe um array e um callback - array_filter() 
     // Vai rodar a função em cada item como um loop o que retornar true vai para o novo array
     $numeros = [1, 25, 42, 18, 13, 91, 82, 20];

     $filtrados = array_filter($numeros, function($item){
          if($item <= 20){
               return TRUE;
          }else{
               return FALSE;
          }
     });

     print_r($filtrados);

     echo "<br><br>";

     //Vai executar uma função em cada item do array - array_map()
     //recebe um callback e um array

     $dobrarValor = array_map(function($item){
          return $item * 2;
     }, $numeros);

     print_r($dobrarValor);

     echo "<br><br>";

//FUNÇÕES NATIVAS DE ARRAY 2/2
     $num = [1, 3, 9, 25, 64, 12];

     //remove o último item - passa o array por referência - array_pop()
     array_pop($num);
     
     //remove o primeiro item - passa o array por referência - array_shift()
     array_shift($num);

     print_r($num);

     echo "<br><br>";

     //procurar um item em um array - in_array()
     if(in_array(94, $num)){
          echo "Existe";
     }else{
          echo "Não existe";
     }

     echo "<br><br>";

     //procura um item e retorna a posição ou false - array_search()
     $pos = array_search(25, $num);
     echo $pos."<br><br>";


     //ordenar - ordem crescente - sort()
     sort($num);
     print_r($num);
     echo "<br><br>";

     //ordernar - ordem decrescente - rsort()
     rsort($num);
     print_r($num);
     echo "<br><br>";

     //ordernar e manter a chave - crescente - asort()
     asort($num);
     print_r($num);
     echo "<br><br>";

     //ordenar e manter a chave - decrescente - arsort()
     arsort($num);
     print_r($num);
     echo "<br><br>";

     //Transforma array em string - inplode()
     $nomes = ['Ingrid', 'Pereira', 'da', 'Silva'];

     $nomeString = implode(' ', $nomes);
     echo $nomeString;


?>