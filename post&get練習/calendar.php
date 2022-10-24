<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>

    </style>
</head>

<body>
    <?php
    $cal = ['', '', '', '', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
    ?>
    <!-- ?表示當前頁面 -->
    <div style="display:flex;width:80%;justify-content:space-between;align-items:center">
    <a href="?y=2022&m=1">上一個月</a>
    <h1>2月份</h1>
    <a href="?y=2022&m=3">下一個月</a>
    </div>
    <table>
        <?php
        foreach ($cal as $i => $day) {
            if($i%7==0){
                echo "<tr>";
            }           
            echo "<td>$day</td>";
            if($i%7==6){
                echo "</tr>";
            }            
        }
        ?>
    </table>
</body>

</html>