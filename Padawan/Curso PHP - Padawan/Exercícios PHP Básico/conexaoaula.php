<?php
$servername="localhost";
$username="root";
$password="";
$database="recodepro_tarde";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
} else {
    echo "Conexão bem sucedida";
};

mysqli_close($conn);
?>