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
        $_SESSION['login']=$user;
    }
}

if($chk){
    $times=$_COOKIE['times']+1;
    setcookie('times',$times,time()+(60*60*24*365));
}else{
    $error="帳號或密碼錯誤";
}

if(isset($error)){
    header("location:login2.php?error=$error");
}else{
    header("location:login2.php");
}

?>