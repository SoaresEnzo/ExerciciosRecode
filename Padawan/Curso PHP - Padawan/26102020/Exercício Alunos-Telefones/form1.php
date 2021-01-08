<!--Criar as tabelas:
Aluno
Id 		int	Auto incremento	Primary Key 
Nome		varchar(60)
Genero	varchar(15)
Endereço	varchar(80)
Bairro	varchar(80)
Cidade	varchar(40)
Cep		int

Telefone
Id		int	Auto incremento 	Primary Key
Id_aluno	int	Foreing Key (aluno)
Telefone	int

A chave estrangeira a ser criada é da relação Id (aluno) com Id_aluno (telefone).

Criar um formulário para que o usuário possa preencher informações as informações acima e poder fazer 
a inserção no banco dados já estabelecido. No formulário deverá ter a opção de limpar todos os campos.

Criar um outro formulário para que o usuário possa fazer a inserção no banco dados dos telefones de 
um determinado aluno, mas antes o aluno deverá existir na tabela aluno.

Criar um outro formulário para que haja a consulta dos telefones cadastrados de um determinado aluno. 
Este formulário deverá ter apenas o campo do Id do aluno e deverá exibir as informações em uma
 tabela em um novo formulário.

-->

<?php
$servername="localhost";
$username="root";
$password="";
$database="2610";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
};

$nome = $_POST["nome"];
$genero = $_POST["genero"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];

$sql = "INSERT INTO aluno(nome,genero,endereco,bairro,cidade,cep) VALUES ('$nome','$genero','$endereco','$bairro','$cidade','$cep')";

    if(mysqli_query($conn,$sql)===true){
        echo 'Registrado com sucesso';
        echo '<a href="./form2.html">Adicionar um telefone de aluno</a><br />';
        echo '<a href="./form2.html">Adicionar um outro aluno</a><br />';
        echo '<a href="./form2.html">Listar telefones</a><br />';
    } else {
        echo 'Algo de errado aconteceu'.mysqli_connect_error();
    };


mysqli_close($conn);
?>