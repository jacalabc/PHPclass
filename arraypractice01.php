<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #999;
        }
    </style>
</head>

<body>
    <h1>宣告陣列1</h1>
    <?php
    $judy = ['95', '64', '70', '90', '84'];
    $amo = ['88', '78', '54', '81', '71'];
    ?>
    <table>
        <tr>
            <td></td>
            <td>國文</td>
            <td>英文</td>
            <td>數學</td>
            <td>地理</td>
            <td>歷史</td>
        </tr>
        <tr>
            <td>judy</td>
            <?php
            for ($i = 0; $i < count($judy); $i++) {
                echo "<td>" . $judy[$i] . "</td>";
            }
            ?>
        </tr>
        <tr>
            <td>amo</td>
            <?php
            for ($i = 0; $i < count($amo); $i++) {
                echo "<td>" . $amo[$i] . "</td>";
            }
            ?>
        </tr>
    </table>
    <h1>宣告陣列2</h1>
    <?php
    $scores = [
        ['', '國文', '英文', '數學', '歷史', '地理'],
        ['judy', 95, 64, 70, 90, 84],
        ['amo', 88, 78, 54, 81, 71],
        ['john', 45, 60, 68, 70, 62]
    ];
    ?>
    <table>
        <?php
        for ($j = 0; $j < count($scores); $j++) {
            echo "<tr>";
            for ($i = 0; $i < count($scores); $i++) {
                echo "<td>" . $scores[$j][$i] . "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>

</body>

</html>