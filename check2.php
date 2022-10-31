<?php
session_start();

$users=[
    [
        "name"=>"mack",
        "pw"=>"1234",
        "level"=>"admin",
    ],
    [
        "name"=>"john",
        "pw"=>"5678",
        "level"=>"user",
    ],
    [
        "name"=>"mary",
        "pw"=>"1357",
        "level"=>"vip",
    ]];



$formAcc=$_POST['acc'];
$formPw=$_POST['pw'];

$chk=false;
foreach($users as $user){
    if($user['name']==$formAcc && $user['pw']==$formPw){
        $chk=true;
    }
}

if($chk){
    $_SESSION['login']=$formAcc;
}else{
    $_SESSION['error']="帳號或密碼錯誤";
}

header("location:login2.php");

?>