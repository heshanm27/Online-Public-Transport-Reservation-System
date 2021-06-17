<?php

require '../config.php';

//inserting data into trainseat table
$trainid=$_GET['id'];

$pname=$_POST['PName'];
$Mob=$_POST['pno'];
$Email=$_POST['email'];
$Bo_Place=$_POST['Bplace'];
$De_Place=$_POST['Dplace'];
$TicketNum=$_POST['ticket'];




    $sql = "INSERT INTO trainseat(TR,pName,Email,Bo_Place,De_Place,TicketNum,trainID) 
    VALUES ('','$pname','$Email','$Bo_Place','$De_Place','$TicketNum','$trainid')";

    if($con->query($sql)){
        

        header("Location: ../trainpayment.php?name=$pname");
   
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }


?>
