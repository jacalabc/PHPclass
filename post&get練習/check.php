<?php
$account='jerry';
$password='1234';
$formAccount=$_POST['account'];
$formPassword=$_POST['password'];
if($account==$formAccount && $password==$formPassword){
header("location:login.php?result=success");
}else{
    header("location:login.php?result=fail");
}
?>