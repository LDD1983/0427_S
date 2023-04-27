

<?php
$today=strtotime("now");    //取得當前的時間秒數
$month=date("n",$today);    //取得當前的月份
$year=date("Y",$today);
$days=date("t",$today);     //取得當前月份的總天數
$firstDate=date("Y-n-1",$today);    //取得當前月份第一天
$finalDate=date("Y-n-t",$today);    //取得當前月份最後一天
$firstDateWeek=date("w",strtotime($firstDate)); //取得當前月份第一天的星期
$finalDateWeek=date("w",strtotime($finalDate)); //取得當前月份最後一天的星期
$weeks=ceil(($days+$firstDateWeek)/7);  //計算當前月份的天數會佔幾周
$firstWeekSpace=$firstDateWeek-1;       //計算當前月份第一周的空白日(或前一個月份佔幾天)
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
<style>
    *{
        box-sizing: border-box;
    }
    .container{

        margin: 30px auto;
        display: flex;
        flex-wrap: wrap;
        width: 50%;
        
    }
    .container >div{
        border: 1px solid #ccc;
        width: calc(100% / 7);
        height: calc(80vh / 7);
        margin-left: -1px;
        margin-top: -1px;
        text-align: center;
        padding-top: 30px;
        font-size: 20;
        font-family:Arial, Helvetica, sans-serif, "微軟正黑體";
        
    }

    
    .container >div:nth-child(1),
    .container >div:nth-child(7),
    .container >div:nth-child(8),
    .container >div:nth-child(14),
    .container >div:nth-child(15),
    .container >div:nth-child(21),
    .container >div:nth-child(22),
    .container >div:nth-child(28),
    .container >div:nth-child(29),
    .container >div:nth-child(35),
    .container >div:nth-child(36),
    .container >div:nth-child(42),
    .container >div:nth-child(43),
    .container >div:nth-child(49)
    {
        background-color: lightpink;
        
        backdrop-filter: 3px ;

    }
    .month{
        width: 50%;
        /* background-color: #ccc; */
        text-align:end;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: #ccc;
        margin: 10px auto;
        /* border: 1px solid #ccc; */
        /* border-radius: 10%; */
        border-left: 20vw solid #ccc ;
        padding-right: 10px;
    }

    


</style>

  <h1 class="month"><?=$year?>-<?=$month?></h1>
  <a href="next.php">next</a>
 
 


    
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


