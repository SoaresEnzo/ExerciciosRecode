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


$sql = "SELECT * FROM telefone WHERE idtelefone = '$id';";

   $query = mysqli_query($conn,$sql)->fetch_assoc(); 

    echo '<table>';
    print_r('<tr><thead>Id</thead><thead>Telefone</thead></tr>');
    for($i=0;$i<count($query);$i++){
        print_r("<tr><td>".$query['id_aluno']."</td><td>".$query['telefone']."</td></tr>");

    }
   echo'</table>';

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Show telephones</title>
</head>
<body>
    <button><a href="form1.html">Adicionar um estudante</a></button>
    <button><a href="form2.html">Adicionar um telefone</a></button>
    <button><a href="form3.html">Listar outros telefones</a></button>
</body>
</html>