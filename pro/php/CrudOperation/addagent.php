<?php

require '../config.php';


$name=$_POST['PName'];
$NIC=$_POST['nic'];
$Email=$_POST['email'];
$Mobile=$_POST['ticket'];
$Bisname=$_POST['Bname'];
$Bisadd=$_POST['Badd'];

$sql = "INSERT INTO agent(AgentID,AgentName,ANIC,AEmail,AMobo,ABisName,AAddress)
 VALUES('','$name','$NIC','$Email','$Mobile','$Bisname','$Bisadd')";

 if($con->query($sql)){

    header("Location: ../../index.html");

 }
 else{

    echo "Error".$sql.$con->error;
 }

?>