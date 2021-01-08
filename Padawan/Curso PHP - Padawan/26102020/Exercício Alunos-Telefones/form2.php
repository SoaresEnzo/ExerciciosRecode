<?php
$servername="localhost";
$username="root";
$password="";
$database="2610";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
};

$id = $_POST["id"];
$telefone = $_POST["telefone"];

$sql = "INSERT INTO telefone(id_aluno,telefone) VALUES ('$id','$telefone')";

    if(mysqli_query($conn,$sql)===true){
        echo 'Registrado com sucesso';
        echo '<a href="./form2.html">Adicionar outro telefone</a>';
        echo '<a href="./form3.html">Listar telefones de alunos</a>';
    } else {
        echo 'Algo de errado aconteceu'.mysqli_connect_error();
    };


mysqli_close($conn);
?>