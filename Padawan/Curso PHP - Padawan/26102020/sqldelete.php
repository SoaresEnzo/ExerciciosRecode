<?php
    $link = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$link)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    $del = "delete from curso where cod_cur = 'C7'";
    mysqli_query ($link, $del);

    mysqli_close($link);
?> 