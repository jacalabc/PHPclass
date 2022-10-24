<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        *{
            margin:0 auto;
            padding:0;
            text-align:center;
        }
        table{
            border-collapse: collapse;
        }
        table td{
            border:1px solid #ccc;
            padding:3px 9px;
        }
    </style>
</head>

<body>
    <?php
    $cal = [];

        $month=(isset($_GET['m']))?$_GET['m']:date("n");
        $year=(isset($_GET['y']))?$_GET['y']:date("Y");

        $nextMonth=$month+1;
        $previousMonth=$month-1;

        $firstDay=$year."-".$month."-1";
        $firstDayWeek=date("N",strtotime($firstDay));
        $monthDays=date("t",strtotime($firstDay));
        $lastday=$year."-".$month."-".$monthDays;
        $spaceDays=$firstDayWeek-1;
        // spaceDays代表空白天數 例如 今天星期六 6-1=5 前面有5天
        $weeks=ceil(($monthDays+$spaceDays)/7); 
        // week 算出這個月有幾周
        // ceil函式 => 無條件進位
        for($i=0;$i<$monthDays;$i++){
            $cal[]=date("Y-m-d",strtotime("$i days",strtotime($firstDay)));
        }
    // echo "<pre>";
    // print_r($cal);
    // echo "</pre>";
    echo "第一天".$firstDay."星期".$firstDayWeek;
    echo "<br>";
    echo "該月共".$monthDays."天，最後一天是".$lastday;    
    echo "<br>";
    echo "月曆天數共".($monthDays+$spaceDays)."天，".$weeks."周";

    ?>
    <!-- ?表示當前頁面 -->
    <div style="display:flex;width:80%;justify-content:space-between;align-items:center">
    <a href="?y=2022&m=<?=$previousMonth;?>">上一個月</a>
    <h1><?=$year;?> 年 <?=$month;?> 月份</h1>
    <a href="?y=2022&m=<?=$nextMonth;?>">下一個月</a>
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