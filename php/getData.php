<?php

require "config.php";



$target_dir = "uploads/";
$file=basename($_FILES["imageupload"]["name"]);
    $target_file = $target_dir . basename($_FILES["imageupload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $fileExt=explode('.',$file);
    $actualExt=strtolower(end($fileExt));
    $alooweExt= array('jpg','jpeg','png');

  if(in_array($actualExt,$alooweExt)){

    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
  }
  else{
    echo "cannot update this type of image";
  }

    $image=basename( $_FILES["imageupload"]["name"],".jpg");

$name =$_POST['name'];
$username =$_POST['uname'];
$email = $_POST['email'];
$phoneno =$_POST['pno'];
$gender =$_POST['select'];
$password =$_POST['pass'];
//$nic=$_POST['nic'];



/*echo $name ;
echo $username ;
echo $email;
echo $phoneno;
echo $gender;
echo $password;*/






$sql = "INSERT INTO user(User_Id,Name,UserName,Email,Phon_No,Gender,Password,U_img) VALUES('','$name','$username','$email','$phoneno','$gender','$password','$image')";


if($con->query($sql)){
    
    header("Location: ../php/login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }






?>