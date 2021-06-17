<?php

require '../config.php';


$name=$_POST['fullName'];
$email=$_POST['email'];
$msg=$_POST['feedback'];


$sql="INSERT INTO contact_us(cont_id,Name,msg,Email) VALUES('','$name','$msg','$email')";

if($con->query($sql)){

   header("location: ../../index.html"); 
}

else{
echo $sql.$con->error;

}



?>