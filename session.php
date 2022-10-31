<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <h1>SESSION</h1>
<?php
session_start();
$_SESSION['name']='MACK';

echo $_SESSION['name'];
?>

<a href="session_01.php">會員中心</a> | 
<a href="session_02.php">個人資料</a>


<?php
print_r($_SESSION);


for($i=0;$i<20;$i++){
    $_SESSION['user'][]=$i."-".rand(1000,9999);
}

echo "<pre>";
print_r($_SESSION);

echo "</pre>";

?>

</body>
</html>