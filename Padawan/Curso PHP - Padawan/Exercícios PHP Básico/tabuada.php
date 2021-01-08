<!--Criar um arquivo .php para que uma determinada tabuada seja exibida.
 O valor a ser calculado deverá ser informado no programa.
-->
<?php
$numero=3;
$contador=0;

    while($contador<=10){
        echo $numero.' X '.$contador.' = '.($numero*$contador).'<br>';
        $contador++;
    }
?>
