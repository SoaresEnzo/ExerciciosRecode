<!--Um comerciante comprou um produto por um determinado e quer vendê-lo com lucro de 45% 
se o valor do produto comprado pelo comerciante for menor que 40,00;
caso contrário, o lucro sobre a venda será de 30%.
informar valor do produto e informar o nome do comprador do produto.
Após a verificação com base no valor do produto, 
exibir o nome do comprador e o valor da venda atualizado.
-->

<?php
    $comprador = 'Lucas';
    $valorComprado = 40.00;
    
    if ($valorComprado<40){
        echo 'Lucro de 45%<br>';
        echo 'Valor de venda: '.$valorComprado*1.45.'<br>';
        echo 'Comprador: '.$comprador;

    } else {
        echo 'Lucro de 35%<br>';
        echo 'Valor de venda: '.$valorComprado*1.35.'<br>';
        echo 'Comprador: '.$comprador;
    };


?>