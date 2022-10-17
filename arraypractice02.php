<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列練習2</title>
</head>
<body>
    <h2>以程式來產生陣列</h2>
    <h4>以九九乘法表為例</h4>
    <?php
    $ninenine=[];//宣告空陣列
    for($row=1;$row<=9;$row++) //列
    {
        for($col=1;$col<=9;$col++) //行
        {
            $ninenine[$row][$col]=$row*$col;
        }
    }
    /*echo $ninenine[9][8];
    echo "<pre>";
    print_r($ninenine);
    echo "</pre>";*/
    foreach($ninenine as $row => $rowcount)
    {
        foreach($rowcount as $col => $total)
        {
            echo $row."x".$col."=".$total."<br>";
        }
    }
    echo "<hr>";

    $ninenine=[];//宣告空陣列
    for($row=1;$row<=9;$row++) //列
    {
        for($col=1;$col<=9;$col++) //行
        {
            $ninenine[$row.'x'.$col]=$row*$col;
        }
    }
    echo $ninenine['7x6'];
    echo "<pre>";
    print_r($ninenine);
    echo "</pre>";


    echo $ninenine['7x6'];
    echo "<br>";
    $break=0;//設定一個計數器=0
    foreach($ninenine as $key => $value)
    {
        $break++;
        echo $key."=".$value;
        echo ($break%9==0)?"<br>":''; //當計數器=9的時候換行
    }
    ?>
</body>
</html>