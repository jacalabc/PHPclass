<h2>字串分割</h2>
<?php
$str="this,is,a,book";
echo "<hr>";

$array=explode(",","this,is,a,book");
print_r($array);

echo "<hr>";
//字串組合
echo "字串組合"."<br>";
echo join(" ", $array); 
echo "<hr>";

//字串取用
echo "字串取用"."<br>";
$str="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str,0,10)."...";
?>

<h1>字串函式整合應用</h1>
<?php
$target='程式設計';
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
$sub="<span style='font-size: 24px;color:red;'>".$target."</span>";
$result=str_replace($target,$sub,$str);
echo $str."<br>";
echo $result;
echo "<hr>";
print_r(explode($target,$str));
echo join($sub,explode($target,$str))
?>
 
 <!-- 學會PHP<span style="font-size: 24px;color:red;">網頁程式</span>設計，薪水會加倍，工作會好找 -->