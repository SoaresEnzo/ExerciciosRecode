<?php
    $con = mysqli_connect("localhost", "root", "", "recodepro");
 
    if (!$con)
    {
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
        exit();
    }

    $cursos = array(); // aqui criamos um array vazio
    $resultado = mysqli_query($con, "select cod_cur, nome from curso"); // selecionamos todos os cursos do nosso banco

    while($cur = mysqli_fetch_assoc($resultado)) // aqui dizemos que enquanto houver cursos no nosso resultado realizaremos a logica a seguir
    { 
        array_push($cursos, $cur); // colocamos nosso curso dentro do array de cursos
    }
    
    foreach($cursos as $curso): // para cada curso dentro do nosso array de cursos geramos o código abaixo
?>
    <table border="1">
        <tr>
            <td><?php echo $curso["cod_cur"] ?></td>
            <td><?php echo $curso["nome"] ?></td>
        </tr>
    </table>

<?php
    endforeach; // acaba o nosso laço de repetição

    mysqli_close($con);
?> 