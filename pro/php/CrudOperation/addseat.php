<?php

require '../config.php';

//insert data into seat table
$busid=$_GET['id'];

$pname=$_POST['PName'];
$Mob=$_POST['pno'];
$Email=$_POST['email'];
$Bo_Place=$_POST['Bplace'];
$De_Place=$_POST['Dplace'];
$seatNum='';


if(!empty($_POST['seat'])) {
    foreach($_POST['seat'] as $check) {

        $seatNum .=$check.",";

    }
    }
    

    $sql = "INSERT INTO seat(seat_ID,pName,Email,Bo_Place,De_Place,SeatNum,busID) 
    VALUES ('','$pname','$Email','$Bo_Place','$De_Place','$seatNum','$busid')";

    if($con->query($sql)){
        

        header("Location: ../payment.php?name=$pname");
   
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }


?>
