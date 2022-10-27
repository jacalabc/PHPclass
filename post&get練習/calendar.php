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
        td:nth-child(1),
        td:nth-child(7) {
            background-color: pink;
        }
        table td{
            border:1px solid #ccc;
            padding:3px 9px;
        }
        .main{
            width:80%;
            border:1px solid black;
            height:500px;
            margin-top:100px;
        }

    </style>
</head>

<body class="main">
    <?php
    $cal = [];

        $month=(isset($_GET['m']))?$_GET['m']:date("n");
        $year=(isset($_GET['y']))?$_GET['y']:date("Y");
        // echo "month".$month."月"."<br>";
        $nextMonth=$month+1;
        $preMonth=$month-1;
        $nextYear=$year;
        $preYear=$year;
      
        if($nextMonth==13){
            $nextMonth=1;
            $nextYear=$year+1;
        }
        if($preMonth==0){
            $preMonth=12;
            $preYear=$year-1;
        }
            
        // echo "nextMonth".$nextMonth."月"."<br>";
        // echo "preMonth".$preMonth."月"."<br>";
        // echo "month".$month."月"."<br>";
        // echo "year".$year."年"."<br>";
        // echo "nextYear".$nextYear."年"."<br>";
        // echo "preYear".$preYear."年"."<br>";


        $firstDay=$year."-".$month."-1";
        $firstDayWeek=date("w",strtotime($firstDay));
        $monthDays=date("t",strtotime($firstDay));
        $lastday=$year."-".$month."-".$monthDays;
        $spaceDays=$firstDayWeek;
        // spaceDays代表空白天數 例如 今天星期六  前面有6天
        $weeks=ceil(($monthDays+$spaceDays)/7); 
        // weeks 算出這個月有幾周
        // ceil函式 => 無條件進位
        for($i=0;$i<$spaceDays;$i++){
            $cal[]='';
        }
        for($i=0;$i<$monthDays;$i++){
            $cal[]=date("Y-m-d",strtotime("$i days",strtotime($firstDay)));
            // $cal[]=date("d",strtotime("$i days",strtotime($firstDay)));
        }
    // echo "<pre>";
    // print_r($cal);
    // echo "</pre>";
    if($firstDayWeek==0){
        $firstDayWeek=7;
    }
    echo "第一天".$firstDay."星期".$firstDayWeek;
    echo "<br>";
    echo "該月共".$monthDays."天，最後一天是".$lastday;    
    echo "<br>";
    echo "月曆天數共".($monthDays+$spaceDays)."天，".$weeks."周";

    ?>
    <!-- ?表示當前頁面 -->
    <div style="display:flex;width:80%;justify-content:space-between;align-items:center">
    <a href="?y=<?=$preYear;?>&m=<?=$preMonth;?>">上一個月</a>
    <h1><?=$year;?> 年 <?=$month;?> 月份</h1>
    <a href="?y=<?=$nextYear;?>&m=<?=$nextMonth;?>">下一個月</a>
    </div>
    <table>
    <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
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