<?php
    $con = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$con)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }
    
    $resultado = mysqli_query($con, "select cod_cur from curso"); 
    printf("Resultado foi %d linhas", mysqli_num_rows($resultado)); 
    
    mysqli_close($con);
?> 