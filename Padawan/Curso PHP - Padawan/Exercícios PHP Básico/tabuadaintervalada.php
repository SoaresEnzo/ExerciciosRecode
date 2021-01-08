<!--
    Criar um arquivo .php para que seja feita uma tabuada com base em um intervalo de valores. 
    Ou seja, deverá ser informado o valor inicial e final da tabuada.
    O cálculo deverá ser feito o do valor zero até o valor 10.
    Contudo, é fundamental que seja exibido apenas os valores pares referente ao intervalo de valor imputado.
-->

<?php

    $inicio=1;
    $fim=10;

    for($inicio;$inicio<$fim;$inicio++){

        if ($inicio%2===0){
        echo "<div class='principal'><h3>Tabuada do {$inicio}</h3>";

        for($i=0;$i<=10;$i++){
             echo '<p>'.$inicio.' X '.$i.' = '.($inicio*$i).'</p>';
            }
            echo "</div>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .principal {
        display: inline-block;
        margin: 2px;
        padding: 0px;
        border: 1px solid black;
        border-radius: 8px;
        text-align: center;
        background-color: #cccccc;
    }

    .principal h3 {
        padding: 0px;
        margin: 0px;
    }
    </style>
</head>
<body>
    
</body>
</html>