 <html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <form method="GET">
    <input type="text" name="cep">
    <input type="submit" value="Enviar">
    <?php
    echo "<center>";
  echo '<h1>Aula 4</h1>';
   echo "</center>";
 echo '<br><pre>';
    if($_GET && isset($_GET)){
      if($_GET['cep']){
      $cep =  $_GET['cep'];
    $jsonviacep = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");

        $arraycep = json_decode($jsonviacep,true);
        foreach($arraycep as $k=>$v){
          echo $k.': '.$v.'<br>';
        }


      echo '<h2>Logradouro: </h2><h4>'.$arraycep['logradouro'].'</h4>';
      echo '<h2>Bairro: </h2><h4>'.$arraycep['bairro'].'</h4>';
      echo '<h2>Município: </h2><h4>'.$arraycep['localidade'].'</h4>';
      echo '<h2>Estado: </h2><h4>'.$arraycep['uf'].'</h4>';
      echo '<h2>DDD: </h2><h4>'.$arraycep['ddd'].'</h4>';
      echo '<h2>CEP: </h2><h4>'.$arraycep['cep'].'</h4><br />';
      echo '<br>';
      }else{
        echo '<h2> CEP NÃO ENCONTRADO, FAVOR DIGITAR CORRETAMENTE!</h2>';
      }

   
     
  }
    ?>

    
  </body>
</html>