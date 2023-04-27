
<link rel="stylesheet" href="./style.css">
<?php
$today=strtotime("now");    //取得當前的時間秒數
$month=(isset($_GET['month']))?$_GET['month']:date("n");    //取得當前的月份
$year=(isset($_GET['year']))?$_GET['year']:date("Y");

echo $year;
echo "<br>";
echo $month;
echo "<br>";


   
$firstDate = strtotime(date("Y-".$month."-1"));    //取得當前月份第一天
$days=date("t",$firstDate);  //取得當前月份的總天數 
$finalDate=strtotime(date("$year-".$month . "-$days"));    //取得當前月份最後一天
echo "firstD" . $firstDate;
echo "<br>";
echo "days" . $days;
echo "<br>";
echo "finalD".$finalDate;
echo "<br>";




$firstDateWeek=date("w",$firstDate); //取得當前月份第一天的星期
$finalDateWeek=date("w",$finalDate); //取得當前月份最後一天的星期
$weeks=ceil(($days+$firstDateWeek)/7);  //計算當前月份的天數會佔幾周
$firstWeekSpace=$firstDateWeek-1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)
echo "firstDateWeek" . $firstDateWeek;
echo "<br>";
echo "finalDateWeek" . $finalDateWeek;
echo "<br>";
echo "weeks".$weeks;
echo "<br>";
echo "firstWeekSpace".$firstWeekSpace;
echo "<br>";

// echo "月:".$month;
// echo "<br>";
// echo "天數:".$days;
// echo "<br>";
// echo "第1天:".$firstDate;
// echo "<br>";
// echo "最後1天:".$finalDate;
// echo "<br>";
// echo "第1天星期:".$firstDateWeek;
// echo "<br>";
// echo "最後1天星期:".$finalDateWeek;
// echo "<br>";
// echo "周數:".$weeks;
// echo "<br>";

//先畫出固定的表頭內容
// echo "<table>";
// echo "<tr>";
// echo "<td>日</td>";
// echo "<td>一</td>";
// echo "<td>二</td>";
// echo "<td>三</td>";
// echo "<td>四</td>";
// echo "<td>五</td>";
// echo "<td>六</td>";
// echo "</tr>";


//使用迴圈來畫出當前月的周數
// for($i=0;$i<$weeks;$i++){
//     echo "<tr>";

    //使用迴圈來畫出當周的天數
    // for($j=0;$j<7;$j++){
    //     echo "<td>";
        //判斷當周是否為第一周或最後一周
//         if(($i==0 && $j<$firstDateWeek) || (($i==$weeks-1) && $j>$finalDateWeek)){
//             echo '&nbsp';
//         }else{
//             echo $j+7*$i-$firstWeekSpace;
//         }
//         echo "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

//使用陣列來繪製月曆


//先畫出固定的表頭內容

$days=[];

//使用迴圈來畫出當前月的周數
for($i=0;$i<$weeks;$i++){
    //使用迴圈來畫出當周的天數
    for($j=0;$j<7;$j++){
        //判斷當周是否為第一周或最後一周
        if(($i==0 && $j<$firstDateWeek) || (($i==$weeks-1) && $j>$finalDateWeek)){
            $days[]='&nbsp';
        }else{
            $days[]=$j+7*$i-$firstWeekSpace;
        }
    }
}



if($month==1){
    $prevyear=$year-1;
    $prevmonth = 12;
}else{
    $prevmonth = $month -1;
    $prevyear = $year;
} 

if($month ==12){
    $nextyear=$year+1;
    $nextmonth = 1;
}else {
    $nextmonth = $month +1;
    $nextyear = $year;
}

echo $nextmonth;
echo"<br>";
echo $nextyear;


/* echo "<pre>";
print_r($days);
echo "<pre>"; */

// echo "<table>";
// echo "<tr>";
// echo "<td>日</td>";
// echo "<td>一</td>";
// echo "<td>二</td>";
// echo "<td>三</td>";
// echo "<td>四</td>";
// echo "<td>五</td>";
// echo "<td>六</td>";
// echo "</tr>";
// for($i=0;$i<count($days);$i++){
//     echo ($i%7==0)?"<tr>":'';
//     echo "<td>";
//     echo $days[$i];
//     echo "</td>";
//     echo ($i%7==6)?"</tr>":'';
// }
// echo "</table>";

// ?>

    


</style>

  <h1 class="month"><?=$year?>-<?=$month?></h1>
  <div class="next">
  <a href="calender.php?year=<?=$nextyear;?>&month=<?=$nextmonth;?>"><?=$nextmonth;?>月</a>
  </div>
  
 
 


    
<div class="container">

<?php
$weekday=["日", "一", "二", "三", "四", "五", "六"];
for ($j=0; $j <7 ; $j++) { 
    echo "<div>".$weekday[$j] ."</div>";
    # code...
}



for($i=0;$i<count($days);$i++){
    
    echo "<div>".$days[$i] ."</div>";
    
}
?>
   
   </div>


