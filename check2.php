<?php
session_start();

$acc='mack';
$pw='1234';

$formAcc=$_POST['acc'];
$formPw=$_POST['pw'];

if($acc==$formAcc && $pw==$formPw){
    $_SESSION['login']=$formAcc;
}else{
    $_SESSION['error']="帳號或密碼錯誤";
}

header("location:login2.php");

?>