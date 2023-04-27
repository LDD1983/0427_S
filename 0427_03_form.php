<h1>Form/表單傳值 </h1>
<h3>Get</h3>

<form action="./arget.php" method="get">
    <label for="name">姓名</label>
    <input type="text" name="name" id="">
    <br>
    <label for="age">年齡</label>
    <input type="text" name="age" id="">
    <br>
    <input type="submit" value="送出">
</form>

<h3>Post</h3>
<form action="./arget.php" method="post">
<input type="text" name="dd" id="">
    <input type="submit" value="送出">
    </form>

<h3>Post檔案</h3>
<form action="./arget.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>檔案傳輸</legend>
        <label for="ddd">輸入文字</label>
    <input type="text" name="ddd" id="">    
    <br><br><br>
    <input type="file" name="img" id="">
    <br><br><br>
    <input type="submit" value="送出">


    </fieldset>
</form>




</form>