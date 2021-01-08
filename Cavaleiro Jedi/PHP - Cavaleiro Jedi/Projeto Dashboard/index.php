<?php
require "Models/Student.php";

$students = Student::getAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Recode</title>
</head>

<body>
    <?php require "partials/header.html" ?>
    <main class="py-5">
        <?php
        foreach ($students as $student) {
        ?>
            <div class="card w-50 mx-auto mt-4">
                <div class="card-header">
                    <?= $student['name']; ?>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla mollitia accusantium cum sint repellendus voluptate delectus alias minima. Dolorum nesciunt eos sit modi expedita voluptatibus tenetur soluta assumenda deleniti ea!
                </div>
                <div class="card-footer d-flex align-items-center justify-content-end">
                    <a class="btn btn-success" href="https://wa.me/<?= $student['telephone'] ?>">
                        <i class="fab fa-whatsapp" style="font-size: 24px"></i>
                    </a>
                </div>
            </div>
        <?php } ?>

    </main>
</body>

</html>