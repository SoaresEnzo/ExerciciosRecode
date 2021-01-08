<?php
/* 
Excercício 1
1 - Criar dois Arrays;
2 - Imprimir dados dos Arrays;
3 - Juntar dois Arrays;
4 - Utilizar uma função diferente da ensinada nos Arrays;
https://www.php.net/manual/pt_BR/ref.array.php
 */

$enderecoArr = array(
    'Rua' => 'Rua do Teste',
    'Bairro' => 'Bairro X',
    'Cidade' => 'Cidade F',
    'CEP' => '70707070',
    'País' => 'Brasil'
);

$telefones = array(
    '+55 (11)911111111',
    '+55 (11)922222222',
    '+55 (11)933333333',
    '+55 (11)944444444',
    '+55 (11)955555555',
    '+55 (11)966666666',
    '+55 (11)977777777',
    '+55 (11)988888888',
    '+55 (11)999999999',
);

$merged = array_merge($enderecoArr, $telefones);

$arrFlipado = array_flip($merged);

echo '<style>pre.cont{display:inline-block;background-color:#cccccc;}div.bloco{background-color:#dddddd;display:inline-block}h2{max-width:200px;}</style>';

echo '<div class="bloco"><h2>Array 1</h2>';
echo '<pre class="cont">';
print_r($enderecoArr);
echo '</pre></div>';

echo '<div class="bloco"><h2>Array 2</h2>';
echo '<pre class="cont">';
print_r($telefones);
echo '</pre></div>';

echo '<div class="bloco"><h2>Junção dos arrays</h2>';
echo '<pre class="cont">';
print_r($merged);
echo '</pre></div>';

echo '<div class="bloco"><h2>Junção dos arrays com chaves e valores invertidos pelo array_flip()</h2>';
echo '<pre class="cont">';
print_r($arrFlipado);
echo '</pre></div>';
