 <html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <h1> Aula 1 - Funções Recursivas</h1>
    <hr>
  
  <hr>
    <?php 

      $nome = "Icaro";
      //Estrutura de Array
      $dados = array(
        10    => "Pedro", 
        11    => "Pedro", 
        'text' => $nome, 
        $nome =>'ABC',
        3.1415=> "Beto", 
        'outroarray'=>array(
            'a'=>1,
            'b'=>2,
            'c'=>2,
        ),
        true  => "Julia"
       );
      echo '<br>';
      echo 'valor do índice 10: '.$dados[10];    //imprime o Pedro
      echo '<br>';
      echo 'valor do índice True: '.$dados[true]; //imprime a 
      echo '<br><pre>';
      //valores e índices
      print_r($dados);
       //somente valores
      print_r(array_values($dados));
      //Remover duplicatas
      print_r(array_unique($dados));
      echo '<br></pre>';
      
      //Calculo com Varchar em Array
      $calc = array(
      'a' => 'm10',
      'b' => '10m',
      'c' => 6,
      );
      echo 'Subtrai b de a: '.($calc['a'] - $calc['b']);
      echo '<br>';
      echo 'Subtrai c de b: '.($calc['b'] - $calc['c']);
      echo '<br>';
      echo 'Subtrai c de a: '.($calc['a'] - $calc['c']);
      echo '<br>';
      //somatório de array
      echo 'Soma todo o array: '.Array_sum($calc);
      
      
      $merge = array_merge($calc, $dados);
      
      echo '<pre>';
      print_r($merge);
      echo '</pre>';
    ?> 
    <br>
    <br>