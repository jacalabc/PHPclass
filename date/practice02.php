<h1>計算自己的生日</h1>
<?php
$birthday = '2022-12-28';
$now = strtotime('now');
//echo strtotime($birthday).'-'.$today;
$diff=$now-strtotime($birthday);
$days = abs(floor($diff/86400));
$hours = abs(floor(($diff%86400)/3600));
$min = abs(floor(($diff%3600)/60));
$sec = abs($diff%60);
echo $days;
/*$today1 = strtotime($today."0:0:0");
$birthday1 = strtotime($birthday."23:59:59");
$ans = ($birthday1 - $today1)/86400;*/

/*echo "今天".$today."<br>";
echo "生日".$birthday."<br>";
echo $ans;*/
?>
<?php
if($diff>0){
?>
<h3>我的生日 12/28 已經過了 <?=$days;?> 天 <?=$hours;?> 小時 <?=$min;?> 分 <?=$sec;?> 秒</h3>
<?php
}else{
?>
<h3>距離我的生日 12/28 還有 <?=$days;?> 天 <?=$hours;?> 小時 <?=$min;?> 分 <?=$sec;?> 秒</h3>
<?php
}
?>