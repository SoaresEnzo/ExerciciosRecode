<!--Criar um programa em PHP para verificar os lados de um triângulo.
Informar valores para as variáveis e através de uma estrutura de controle exibir a informação 
do nome do triângulo.
Atividade com 15minutos de duração.

Escaleno: todos os lados são diferentes
Isósceles: Apenas dois lados são iguais
Equilátero: Todos os lados são iguais

-->

<?php
    $a=5;
    $b=5;
    $c=1;

    echo 'O primeiro lado é '.$a.'<br>';
    echo 'O segundo lado é '.$b.'<br>';
    echo 'O terceiro lado é '.$c.'<br>';

    if($a==$b&&$b==$c){
        echo 'O triângulo é <strong>Equilátero</strong>';
    } else if ($a==$b || $a==$c || $b==$c){
        echo 'O triângulo é <strong>Isósceles</strong>';
    } else {
        echo 'O triângulo é <strong>Escaleno</strong>';
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