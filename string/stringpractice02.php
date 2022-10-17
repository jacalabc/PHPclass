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