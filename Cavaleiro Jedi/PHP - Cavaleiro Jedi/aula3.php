<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    echo "<center>";
  echo '<h1>Aula 3</h1>';
  
    $json = file_get_contents('https://gturnquist-quoters.cfapps.io/api/random');
    $json2 = file_get_contents('https://gturnquist-quoters.cfapps.io/api/random');
    
    echo '<br>';
    $arrayDecode = json_decode($json);
    $arrayDecode2 = json_decode($json2);
    
    echo '<br>';
  if($arrayDecode->type == 'success'){
      
      echo '<h2>'.$arrayDecode->value->id.'</h2>';
      echo '<h3>'.$arrayDecode->value->quote.'</h3>';
    
  }
  if($arrayDecode2->type == 'success'){
      
      echo '<h2>'.$arrayDecode2->value->id.'</h2>';
      echo '<h3>'.$arrayDecode2->value->quote.'</h3>';
      echo "</center>";
      
  }
  echo '<br><pre>';
    $cep =  21715000;
    $jsonviacep = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");

        $arraycep = json_decode($jsonviacep,true);
      print_r($arraycep);
      echo '<br>';
      var_dump($arraycep);

    ?>

    
  </body>
</html>