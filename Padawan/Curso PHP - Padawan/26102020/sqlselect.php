<?php
    // Conexão com o banco de dados
    $con = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$con)
    {
        die ("Falha na conexão com o BD " .mysqli_connect_errno());
        exit();
    }
     
    $sel = "select cod_cur, nome from curso order by cod_cur";
    $result = mysqli_query($con, $sel);

    while($row = mysqli_fetch_assoc($result))
    {
        printf ("%s (%s)", $row["cod_cur"], $row["nome"]);
       
        echo "<hr>";
    }
    
    mysqli_close($con);
?> 