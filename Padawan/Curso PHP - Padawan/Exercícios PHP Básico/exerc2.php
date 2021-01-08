<!--
    Criar um arquivo com extensão php1 - Criar antes do DOCTYPE três variáveis e em cada uma das variáveis colocar um determinado conteúdo.
     Uma das variáveis deverá ser a do título;
     2 - Na tag <title> colocar o conteúdo da variável título;
     3 - Na tag <body> colocar em cada parágrafo a ser criado por você o conteúdo da variável.
         Lembrando que como são duas variáveis deverão existir dois parágrafos; 
      4 - A variável deverá estar dentro do texto a ser criado por você.

-->
<?php
    $titulo = "Os benefícios do PHP no back-end";
    $subtitulo = "Desenvolvimento rápido";
    $p1 = "Você precisa saber isso ao criar um aplicativo usando PHP. Em seguida, o processo acontece muito mais rápido do que quando você cria o aplicativo usando outras linguagens de programação. Além disso, o PHP também é equipado com várias ferramentas, recursos, caldeiras, das quais você pode desfrutar de graça por causa de sua natureza. <i>código aberto</i>.";
    $p2 = "Essa vantagem certamente fornecerá muitos benefícios nos quais você não precisará gastar muito tempo ao tentar fazer um aplicativo. Mas, ainda assim, quanto tempo um aplicativo da Web é criado depende basicamente de quão complexa é a Web e de quão habilidoso você é no PHP.";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo;?></title>
</head>
<body>
    <h1><?php echo $titulo ;?></h1>
    <h3><?php echo $subtitulo ;?></h3>
    <p><?php echo $p1 ;?></p>
    <p><?php echo $p2 ;?></p>

</body>
</html>