<?php
include "connection.php";
session_start();
    if(isset($_GET['delete'])){
     $id=$_GET['delete'];
     $del = mysqli_query($con,"delete from stock_market_data where id = '$id'"); 
     if($del){
     
          $_SESSION['status'] = "Data deleted Succesfully";
          header('location:index.php');        
      }
    }

     ?>
          


