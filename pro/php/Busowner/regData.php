<?php
//link database connection file
require "../config.php";


//file directory after upload
$target_dir = "../uploads/";
//get image
$file=basename($_FILES["imageupload"]["name"]);


  $target_file = $target_dir . $file;
   $errorcheck = 0;

    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
  
    if (move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["imageupload"]["name"]). " has been uploaded.";
    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }
  


$image=basename( $_FILES["imageupload"]["name"]);
$name =$_POST['name'];
$username =$_POST['uname'];
$email = $_POST['email'];
$phoneno =$_POST['pno'];
$gender =$_POST['select'];
$password =$_POST['pass'];
$nic=$_POST['nic'];





//check if username already taken

$sql = "select * from user where  UserName ='$username'";
$result = $con->query($sql);

if($result->num_rows>0){

  
  $message = "Username Name Already Taken Try Another";
    echo "<script>
    alert('$message');
    window.location.href='reg.php';
    </script>";
  
}else{



$sql = "INSERT INTO busowner(OwID,UserName,Name,Phone_No,Email,NIC,Gender,Password,U_Img) VALUES('','$username','$name','$phoneno','$email','$nic','$gender','$password','$image')";


if($con->query($sql)){
    
    header("Location: ../../index.html");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }



}

$con->close();
?>