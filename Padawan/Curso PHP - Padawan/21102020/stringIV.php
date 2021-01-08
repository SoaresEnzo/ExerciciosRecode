<?php
    $titulo = 'Título da minha página';
    $css = '<link rel="stylesheet" type="text/css" href="css/estilos.css" />';
    $conteudo = 'Sejam bem-vindos ao mundo do PHP <br> Nele poderemos ter muitas oportunidades <br><br> <strong>Vamos em frente!</strong>';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>
        <?php
            echo $css;
        ?>
    </head>
    <body>
        <?php
            echo $conteudo;
        ?>
        <p>Eu posso repetir o valor da variável sempre que eu quiser sabia? Veja aqui o nosso titulo aparecendo "<?php echo $titulo; ?>"</p>        	<p>E não necessariamente deveria imprimir <b>$titulo</b> apenas porque eu a declarei primeiro poderia imprimir <b>$css</b> antes 		e depois <b>$titulo</b> ou qualquer uma variável isso vai de acordo com sua necessidade</p>
        <br>
        <p>Agora irei exibir o <b>$conteudo</b> novamente, olhe ela ai:</p>
        <p>
        <?php echo $conteudo; ?>
        </p>
    </body>
</html>