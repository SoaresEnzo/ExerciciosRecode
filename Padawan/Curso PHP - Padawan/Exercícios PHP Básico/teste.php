<?php

$arr = array("casa","moto","carro","apartamento","peixe");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container-principal{
        background-color:black;
        width: 100%;
    }
    .item {
        background-color:blue;
        border-radius: 100px;
    }

    .item p {
        color:red;
    }
    </style>
</head>
<body>
    <div class="container-principal">
    <?php
    foreach($arr as $item){
        printf("
            <div class='item'>
            <p>$item</p>
            </div>");
    };
    
    ?>
    </div>
</body>
</html>