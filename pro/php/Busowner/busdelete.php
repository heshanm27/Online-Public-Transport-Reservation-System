<?php   
session_start();  
if(!isset($_SESSION["OwID"])){  
    header("location: login.php");  
} else {  
?>

<?php

require '../config.php';

$id=$_GET['id'];
$id2=$_GET['seassionid'];

$sql = "DELETE FROm bus WHERE BusID =$id";

if($con->query($sql)){

    header("Location: busupdate.php?id=$id2");
}

?>

<?php
}
?>