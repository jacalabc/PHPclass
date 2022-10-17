<?php
 $a=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸'];
 $b=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
//ctrl + shift +p

//二維陣列
/*$years=[];
for($i=0;$i<60;$i++)
    {
       $years[$a[$i%10]][$b[$i%12]]=$i;
    }
echo "<pre>";
print_r($years);
echo "<pre>";

echo "丁亥".$years['丁']['亥'];
echo "<hr>";

//一維陣列
$years2=[];

for($i=0;$i<60;$i++)
    {
       $years2[$a[$i%10].$b[$i%12]]=$i;
    }
echo "<pre>";
print_r($years2);
echo "<pre>";
echo "丁亥".$years2['丁亥'];
echo "<hr>";

$years3=[];

for($i=0;$i<60;$i++)
    {
       $years3[$i]=$a[$i%10].$b[$i%12];
    }
echo "<pre>";
print_r($years3);
echo "<pre>";
echo "<hr>";*/

$yearsblabla=[];
$startyear=1024;
$inputyear=2456;

for($i=0;$i<60;$i++)
    {
       $yearsblabla[$i]=$a[$i%10].$b[$i%12];
    }
echo "<pre>";
print_r($yearsblabla);
echo "<pre>";

echo "西元{$inputyear}年是".$yearsblabla[($inputyear-$startyear)%60]."年";

?>