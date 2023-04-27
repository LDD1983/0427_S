<h2>計算結果</h2>
<?php


$height=$_GET['height'];
$weight = $_GET['weight'];

echo "身高為" . $height . "公分<br>";
echo "體重為" . $weight . "公斤<br>";

$bmi = round($weight/(($height/100)*($height/100)));

if ($bmi>=27) {
    # code...
    $level = "肥胖";
} else if ($bmi>=24) {
    # code...
    $level = "過重";
} else if ($bmi>=18.5) {
    # code...
    $level = "健康";
} else {
    $level = "過輕";
}






echo"您的BMI為：" . $bmi;
echo "<br>";
echo "體重為" . $level;
echo "<br>";
echo '<h3><a href="./0427_04_bmi.php">返回計算</a></h3>';


