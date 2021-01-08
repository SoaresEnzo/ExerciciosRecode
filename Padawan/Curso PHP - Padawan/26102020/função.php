<?php
    function mais8($numero)
    {
        $numero += 8;
        echo $numero;
        echo "<br>";
    }
    
    $a = 3;
    mais8($a); //$a continua valendo 3
    echo $a;
?>