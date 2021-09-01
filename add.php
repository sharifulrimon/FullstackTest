<?php
include ("connection.php");
session_start();
if(isset($_POST["Submit"])){

      $Date=  $_POST["date"];
       $Tradecode=$_POST["tradecode"];
       $High= $_POST["high"];
       $Low= $_POST["low"];
       $Open=$_POST["open"];
       $Close=  $_POST["close"];
       $Volume=  $_POST["volume"];
       $sql= "INSERT INTO stock_market_data(date,trade_code,high,low,open,close,volume)
          VALUES('$Date','$Tradecode','$High','$Low','$Open','$Close','$Volume') ORDER BY id";
          $result=mysqli_query($con,$sql);
          
          if($result){
     
            $_SESSION['status'] = "Data added Succesfully.Check the last row!";
            header('location:index.php');        
        }
          
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>   
<form action="add.php" method="post">

<fieldset>
<h1>Enter Your data:</h1>
<span class="FieldInfo">Enter Date:</span>
<br>
<input type="text" name="date" value="">
<br>
<span class="FieldInfo">Enter Trade_code:</span>
<br>
<input type="text" name="tradecode" value="">
<br>
<span class="FieldInfo">Enter High:</span>
<br>
<input type="text" name="high" value="">
<br>
<span class="FieldInfo">Enter Low:</span>
<br>
<input type="text" name="low" value="">
<br>
<span class="FieldInfo">Enter Open:</span>
<br>
<input type="text" name="open" value="">
<br>
<span class="FieldInfo">Enter Close:</span>
<br>
<input type="text" name="close" value="">
<br>
<span class="FieldInfo">Enter Volume:</span>
<br>
<input type="text" name="volume" value="">
<br>
<br>
<input type="submit" name="Submit" value="Submit" style="cursor:pointer">
</fieldset>

</form>
</div>
</body>
</html>