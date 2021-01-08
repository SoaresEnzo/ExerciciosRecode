<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .msg {
            display: block;
            width: 40%;
            background-color:#ffffff;
            font-family: sans-serif;
            text-align:center;
            border-radius: 10px;
            border: 1px solid #000000;
        }
        body {
            background-color:#cccccc;
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="msg">
    <h1>Seu envio foi recebido</h1>
    <p>Seu nome é <?php echo $_POST["nome"];?></p>
    <p>Sua senha é <?php echo $_POST["senha"];?></p>
    <p>Seu gênero é <?php echo $_POST["genero"];?></p>
    <p>Seu turno é: <?php forEach($_POST["turno"] as $turno){
        echo "<br>&#8226 ".$turno;
    }?></p>
    <p>Sua cidade é <?php echo $_POST["cidade"];?></p>
    </div>
</body>
</html>