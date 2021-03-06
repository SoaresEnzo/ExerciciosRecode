<?php
require "Models/Student.php";

$totalStudents = Student::getTotalStudents();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Recode</title>
</head>

<body>
    <?php require "partials/header.html" ?>
    <main class="d-flex align-items-center"style="height:90vh; background-color: #ccc;padding-top: 5vh;">
        <div class="card d-flex justify-content-center mx-auto" style="width:350px; height:80vh;">
            <canvas id="myChart" width="200" height="200"></canvas>
        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext("2d");

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Monitores', 'Alunos'],
                datasets: [{
                    data: [5, <?= $totalStudents[0]['total_students']?>],
                    backgroundColor: [
                        '#be2121',
                         "#2172be"
                         ]
                }]
            }
        })
    </script>
</body>

</html>