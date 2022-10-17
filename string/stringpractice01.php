<h1>字串練習</h1>
<?php
$str="aaddw1123";
//$str=str_replace(['a','d','w',1,2,3],'*',$str);

/* for($i=0;$i<mb_strlen($str);$i++)
 {
     echo "*";
 }*/
 echo str_repeat("*",mb_strlen($str));
?>