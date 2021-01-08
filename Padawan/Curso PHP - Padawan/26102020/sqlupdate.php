<?php
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    $upd = "update curso set nome = 'Letras Frances' where cod_cur = 'C1'";
    mysqli_query ($link, $upd);

    mysqli_close($link);
?> 