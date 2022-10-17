<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h2>直角三角形</h2>
    <?php
    for ($i = 0; $i < 1; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo "*";
        }
    }
    ?>
    <h2>矩形</h2>
    <?php

    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6) {
                echo "*";
            } else if ($j == 0 || $j == 6) {
                echo "*";
            } else {
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
    ?>


</body>

</html>