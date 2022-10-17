<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>威力彩選號不重複</h2>
    <?php
    /*$tmp=['A','B','C'];
    //$a=array_pop($tmp);
    shuffle($tmp);
    //print_r($a);
    print_r($tmp);*/ //shuffle測試
    $a1=[];
    $a2=rand(1,8);

    /*for($i=0;$i<6;$i++) //i是選號用的，沒有實質意義
    {
        $a1[]=rand(1,38);
    }*/

    /*while(count($a1)<6)
    {
        /*$num=rand(1,38);
        $check=false;
        for($i=0;$i<count($a1);$i++) //i是選號用的，沒有實質意義
        {           
            if($a1[$i]==$num)
            {
                $check=true;
            }
        }
        if($check==false)
        {
            $a1[]=$num;
        }
    }*/

    /*while(count($a1)<6)
    {
        $num=rand(1,38);
        if(!in_array($num,$a1))
        {
            $a1[]=$num;
        }                    
    }*/

    /*$num1=[1,2,3,4,5,6,7,8,9,10,11,12,13,14
           ,15,16,17,18,19,20,21,22,23,24,25
           ,26,27,28,29,30,31,32,33,34,35,36
           ,37,38];
    for($i=0;$i<6;$i++)
    {
        $index=rand(0,count($num1)-1); //從0~37隨機挑選num1陣列的索引
        $num=$num1[$index]; //指定變數num的值等於num1陣列的索引所對應到的值
                            //例如num1[2]的值等於3
        $a1[]=$num; //指定a1空陣列的值等於變數num的值
        //unset($num1[array_search($num,$num1)]); unset行不通，會連索引一起刪掉
        array_splice($num1,array_search($num,$num1),1);
        //1代表要刪掉的資料數量，並且用array_splice重新排序索引
        //被刪掉的資料會由後面的資料補上
        echo "<pre>";
        print_r($num1);
        echo "</pre>";
    }*/

    $num1=[1,2,3,4,5,6,7,8,9,10,11,12,13,14
           ,15,16,17,18,19,20,21,22,23,24,25
           ,26,27,28,29,30,31,32,33,34,35,36
           ,37,38];
    /*for($i=0;$i<6;$i++)
    {
        shuffle($num1);
        echo "打亂後的陣列:";
        print_r($num1);
        $a1[]=array_pop($num1);//把陣列最後一個值彈出來
        echo "<hr>";
        echo "獎號陣列內容:";
        print_r($a1);
        echo "<hr>";
    }*/
    shuffle($num1); //打亂排序


    echo join(",",$a1);
    echo "<br>";
    //echo "第一區:".$num1[0].",".$num1[1].",".$num1[2].",".$num1[3].",".$num1[4].",".$num1[5];
    echo "第一區:".join(",",array_splice($num1,0,6));
    echo "<br>";
    echo "第二區:".$a2;s
    ?>
</body>
</html>