<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <h1> Aula 2 - Funções Recursivas</h1>
    <hr>

    <?php 
    function multiplicacao($x,$y){
      $resultado = 0;
      for($i=0;$i<$y;$i++){
        $resultado +=$x;
      }
      return $resultado;
    }
    
    echo "Resultado: ".multiplicacao(4,6);
    echo "<br>";

    function multiplicacao2($x,$y){
      if($y == 0){
        return 0;
      }else{
        return $x + multiplicacao2($x, --$y);
      }
    }
    echo "Resultado: ".multiplicacao2(4,6);
    echo "<br>";

    function fat($numero){
      if($numero == 0){
        return 1;
      }else{
        if($numero>0){
        return $numero * fat($numero-1);
        }else{
          return $numero * fat($numero+1);
        }
      }
    }
    echo "Resultado: ".fat(9);
    echo "<br>";

    function fibo($numero){
      if($numero < 2)
        return $numero;
      else
        return (fibo($numero-1) + fibo($numero-2));
    }

    echo "Resultado: ".fibo(4);
    echo "<br>";
   



function array_map_recursive($str_func,$arr){

	$retorno = array();

	foreach($arr as $chave => $valor){

		if(is_array($valor)){
			$retorno[$chave] = array_map_recursive($str_func,$valor);
		}else{
			$retorno[$chave] = $str_func($valor);
		}
	}
	return $retorno;

}

function isInt ($field){
 	if (is_int($field)) {
 		return 'é inteiro';
 	} else {
 		return $field;	
 	}
}
echo '<pre>';
$arr = array(
  'chave1'=>'valor1',
  'chave2'=>'valor2',
  'aqui'=>1,
  array(
      'e aqui'=>25,
      array(
        'aquitb'=>10,
        'valor nivel 3'=> 'nivel 3'
      ),
      'valor nivel 2'=> 'nivel 2'
      
    ), 
    'valor nivel 1'=> 'nivel 1'
  );

print_r(array_map_recursive('isInt',$arr));


?>


  </body>
</html>