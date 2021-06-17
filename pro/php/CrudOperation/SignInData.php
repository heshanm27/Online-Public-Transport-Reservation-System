<?php
//link database connection file
require "../config.php";


//file directory after upload
$target_dir = "../uploads/";
//get image
$file=basename($_FILES["imageupload"]["name"]);


  $target_file = $target_dir . $file;
 
    
  
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



/*echo $name ;
echo $username ;
echo $email;
echo $phoneno;
echo $gender;
echo $password;*/

//check if username already taken

$sql = "select * from user where  UserName ='$username'";
$result = $con->query($sql);

if($result->num_rows>0){

  
  $message = "Username Name Already Taken Try Another";
    echo "<script>
    alert('$message');
    window.location.href='../php/SignIn.php';
    </script>";
  
}else{



$sql = "INSERT INTO user(UserID,UserName,Name,Phone_No,Email,NIC,Gender,Password,U_Img) VALUES('','$username','$name','$phoneno','$email','$nic','$gender','$password','$image')";


if($con->query($sql)){
    
    header("Location: ../login.php");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }



}

$con->close();
?>