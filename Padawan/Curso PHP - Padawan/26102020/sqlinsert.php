<?php
    // Conexão com o banco de dados
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    else
        echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
 
    $insere = "Insert into curso (cod_cur, nome, tipo, duracao)
    Values ('C6', 'Análise de Sistemas','Tecnólogo', 3)";
    mysqli_query ($link, $insere);

    $insere = "Insert into curso (cod_cur, nome, tipo, duracao)
    Values ('C7', 'Gestão de TI','tecnólogo', 3)";
    mysqli_query ($link, $insere);

    mysqli_close($link);
?> 