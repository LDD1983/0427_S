<h1>目標頁面</h1>

<?php



 if (!empty($_GET)) {
   $age = $_GET['age'];
   $name = $_GET['name'];
   echo "姓名 = ".$name ;
   echo "<br>";
   echo "年齡 = ".$age ;
   
    


    echo "<pre>";   
    print_r($_GET);
    echo "</pre>";
 } 
 if (!empty($_POST)) {
    echo "<pre>";
    
    print_r($_POST);
echo "</pre>";
 } 



 echo "<br>";

 if (isset($_GET['13'])) {
    echo "declare";
 } else {
    echo "not declare";
 };
 echo "<br>";


 

  echo "<br>";


 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>"; 
 echo "<br>";

 ?>





