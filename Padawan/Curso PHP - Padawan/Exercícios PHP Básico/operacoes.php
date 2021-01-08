<!--criar um arquivo .php para criar uma estrutura de switch case onde deverá ser informado
 uma valor numérico ou um símbolo que represente as operação aritmética. 
 As operações a serem executadas são: 
 soma; subtração; multiplicação; divisão e resto da divisão.
-->
<?php
$operacao = "/";
$termoA = 2;
$termoB = 5;

switch($operacao){
    case"+": echo 'A soma é igual a '.($termoA+$termoB);break;
    case"-": echo 'A subtração é igual a '.($termoA-$termoB);break;
    case"*": echo 'A multiplicação é igual a '.($termoA*$termoB);break;
    case"/": echo 'A divisão é igual a '.($termoA/$termoB);break;
    default: echo "O símbolo não é válido";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>