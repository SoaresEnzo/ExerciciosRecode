<?php
$servername="localhost";
$username="root";
$password="";
$database="3010";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
};

$nome =$_POST['nome'];
$carac =$_POST['caracteristica'];
$quant =$_POST['quantidade'];
$peso =$_POST['peso'];


$sql = "insert into tabelateste(nome,caracteristica,quantidade,peso) values('$nome','$carac','$quant','$peso')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();