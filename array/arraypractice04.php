<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>找出500年內的閏年</h3>
    <?php
    $years=[];
    for($i=2022;$i<=2522;$i++)
    {
        if($i%4==0 && $i%100!=0 || $i%400==0)
        {
            $years[]=$i;
        }
    }

    $testyear=2320;
    if(in_array($testyear,$years))
    {
        echo $testyear."是閏年";
    }else{
        echo $testyear."不是閏年";
    }
    ?>

    <h3>500年內的閏年</h3>
    <table>    
    <?php
        foreach($years as $idx => $year)
        {
            if($idx%5==0)
            {
                echo "<tr>";
                echo "<td>{$year}</td>";
            }else if($idx%5==4)
            {
                echo "<td>{$year}</td>";
                echo "</tr>";
            }else{
                echo "<td>{$year}</td>";
            }
           
        }
    ?>
    </table>
</body>
</html>