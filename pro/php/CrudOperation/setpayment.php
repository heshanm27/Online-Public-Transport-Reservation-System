<?php

require "../config.php";



//insert data into payment table

$Cname =$_POST['cardName'];
$Cnum = $_POST['cardNo'];
$CEDate =$_POST['cardEX'];
$cvv =$_POST['cvv'];
$tot=$_GET['tot'];


$sql = "INSERT INTO payment(PID,CardNAme,CardNum,ExpireD,CVV,TotalPrice) VALUES('','$Cname','$Cnum','$CEDate','$cvv','$tot')";


if($con->query($sql)){
    
  header("location: ../end.php");  


  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $con->close();
?>