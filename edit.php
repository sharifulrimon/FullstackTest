<?php
	include 'connection.php';
    session_start();

    $id= $_GET['in'];
    $Date= $_GET['dt'];
    $Tradecode= $_GET['cd'];
    $High= $_GET['hi'];
    $Low= $_GET['lw'];
    $Open= $_GET['op'];
    $Close= $_GET['cl'];
     $Volume= $_GET['vl'];


     if(isset($_GET['Submit'])){
     
      
        $id= $_GET['id'];
        $newDate = $_GET['date'];
	    $newTradecode = $_GET['tradecode'];
		$newHigh = $_GET['high'];
		$newLow = $_GET['low'];
        $newOpen = $_GET['open'];
        $newClose = $_GET['close'];
        $newVolume = $_GET['volume'];
        
            
        $sql= "UPDATE stock_market_data SET date='$newDate',trade_code='$newTradecode',high='$newHigh',
        low='$newLow',open='$newOpen',close='$newClose',volume='$newVolume' WHERE id='$id' ";
        $result=mysqli_query($con,$sql);
      
        if($result){
     
            $_SESSION['status'] = "Data Updated Succesfully";
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
  
<form action="edit.php" method="GET">


<fieldset>
<h1>Enter Your Updated data:</h1>  
<input class="d-none" type="text" name="id" value="<?php echo $id;?>">
<br>
<span class="FieldInfo">Enter Date:</span>
<br>
<input type="text" name="date" value="<?php echo $Date;?>">
<br>
<span class="FieldInfo">Enter Trade_code:</span>
<br>
<input type="text" name="tradecode" value="<?php echo $Tradecode;?>">
<br>
<span class="FieldInfo">Enter High:</span>
<br>
<input type="text" name="high" value="<?php echo $High;?>">
<br>
<span class="FieldInfo">Enter Low:</span>
<br>
<input type="text" name="low" value="<?php echo $Low;?>">
<br>
<span class="FieldInfo">Enter Open:</span>
<br>
<input type="text" name="open" value="<?php echo $Open;?>">
<br>
<span class="FieldInfo">Enter Close:</span>
<br>
<input type="text" name="close" value="<?php echo $Close;?>">
<br>
<span class="FieldInfo">Enter Volume:</span>
<br>
<input type="text" name="volume" value="<?php echo $Volume;?>">
<br>
<br>
<input type="submit" name="Submit" value="Submit" style="cursor:pointer">

</fieldset>

</form>
</div>

</body>
</html>

<?php


?>