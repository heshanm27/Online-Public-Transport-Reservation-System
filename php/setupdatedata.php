<?php   
session_start();  
if(!isset($_SESSION["user"])){  
    header("location: ../php/login.php");  
} else {  
?>


<?php

require "config.php";

$username =$_SESSION["user"];

$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageupload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $image=basename( $_FILES["imageupload"]["name"],".jpg");

$name =$_POST['name'];
$email = $_POST['email'];
$phoneno =$_POST['pno'];
$gender =$_POST['select'];

//$nic=$_POST['nic'];



/*echo $name ;
echo $username ;
echo $email;
echo $phoneno;
echo $gender;
echo $password;*/


 if(empty($name && $email && $phoneno && $gender)){

    $sql = "UPDATE user SET U_img='$image' Where UserName ='$username'";
}
else if(empty($image)){

    $sql = "UPDATE user SET Name= '$name',Email='$email',Phon_No='$phoneno',Gender = '$gender' Where UserName ='$username'";
}
else if(empty($name)){

    $sql = "UPDATE user SET Email='$email',Phon_No='$phoneno',Gender = '$gender',U_img='$image' Where UserName ='$username'";
}



else{

    $sql = "UPDATE user SET Name= '$name',Email='$email',Phon_No='$phoneno',Gender = '$gender',U_img='$image' Where UserName ='$username'";
}



//$sql = "UPDATE user SET Name= '$name',Email='$email',Phon_No='$phoneno',Gender = '$gender',U_img='$image' Where UserName ='$username'";


if($con->query($sql)){
    
    header("Location: ../php/userprofile.php");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }






?>


<?php

  }
?>