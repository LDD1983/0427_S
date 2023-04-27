

<!-- $acc = 'admin';
$pw = '1234';


if(!empty($_POST)){
    echo "yes";
}

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "正確";
}else {
    echo "失敗";
} -->





<h1>login</h1>

<?php
if(isset($_GET['error'])){
    echo "<span style = 'color :red'>";
    echo $_GET['error'];
    echo"</span>";

}

?>

<form action="./0427_05_login_target.php" method="post">
    <div>
        <label for="acc">帳號</label>
        <input type="text" name="acc" id="acc">
    </div>
    <div>
        <label for="pw">密碼</label>
        <input type="password" name="pw" id="pw">
    </div>
    <div>
        <input type="submit" value="登入">
    </div>
</form>

