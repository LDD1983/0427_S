<?php

$acc = 'admin';
$pw = '1234';


$_POST['acc'];
$_POST['pw'];

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "登入成功";
}else {
    
    header("location:./0427_05_login.php?error=帳密錯誤，登入失敗");
}


echo '<h3><a href="./0427_05_login.php">回登入頁面</a></h3>';



