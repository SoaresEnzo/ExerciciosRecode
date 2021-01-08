<?php

$urlA = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");
$urlB = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");

$jsonA=json_decode($urlA,true);
$jsonO=json_decode($urlB);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Acesso por array associativo</h1>
    <h2><?php echo 'O id é:'.$jsonA['value']['id'];?></h2>
    <h3><?php echo $jsonA['value']['quote'];?></h3>
    <h1>Acesso por objeto</h1>
    <h2><?php echo 'O id é: '.$jsonO->value->id;?></h2>
    <h3><?php echo $jsonO->value->quote;?></h3>
</body>
</html>