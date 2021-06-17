<?php   
session_start();  
if(!isset($_SESSION["user"])){  
    header("location: ../php/login.php");  
} else {  
?>


<?php

require "../config.php";

$username =$_SESSION["user"];

//image save file 
$target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["imageupload"]["name"]);
   

//move upload file into saved folder
    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageupload"]["name"]);

$name =$_POST['name'];
$email = $_POST['email'];
$phoneno =$_POST['pno'];
$gender =$_POST['select'];
$nic=$_POST['nic'];

$sqlmulti="";

//check what data has update and update it on table



if(empty($image)){

    $sql = "UPDATE user SET Name= '$name',Email='$email',Phone_No='$phoneno',Gender = '$gender' Where UserName ='$username'";
}
else if(empty($name && $email && $phoneno && $gender &&$nic)){

    $sql = "UPDATE user SET U_Img='$image' Where UserName ='$username'";
}

 

   
   

//$sql = "UPDATE user SET Name= '$name',Email='$email',Phon_No='$phoneno',Gender = '$gender',U_img='$image' Where UserName ='$username'";


if($con->query($sql)){
    
    header("Location: ../userprofile.php");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }






?>


<?php

  }
?>