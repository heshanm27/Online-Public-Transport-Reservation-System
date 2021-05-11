<?php
    require 'config.php';

  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    
    $sql = "select * from user WHERE UserName='".$user."' AND Password='".$pass."'";
    $result = $con->query($sql);
  
    if($result->num_rows>0){
  
      while($row = $result->fetch_assoc()){
  
        $dbusername =$row['UserName'];
        $dbpassword =$row['Password'];
      }
  
    }

    if($user == $dbusername && $pass == $dbpassword)  
    {  
    
        header("Location: ../php/userprofile.php");
    }
     else {  

         

    $message = "Invalid Username or PassWord";
    echo "<script>
    alert('$message');
    window.location.href='../php/login.php';
    </script>";

    }  
  
  
    ?>








  
