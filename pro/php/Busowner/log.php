<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/nav.css">

    <script src="../../js/valid.js"></script>
    <title>Document</title>
</head>
<body>
  
   <!--Navigation bar Start-->
   <nav>  

<div class="logo">
    <!--Site Logo-->
    <a href="../../index.html" style="text-decoration: none; ">
        <img src="../../img/navimg/socialmedia/logo.png" id="logoimg">
       
      <h4>BuyTickets.LK </h4></a></div>
    <!--Navigiation Bar-->
<ul>
<li><a href="../../index.html">Home</a></li>

<!--First Drop Down Menu-->

<li><a href="">Registration</a>
<!--Second Drop Down Menu-->
<ul id="drop2">
    <li> <a href="BusRegistrationmain.php">Bus Registration</a></li>



    
</ul>

</li>

<li><a href="../../help.html">Help</a></li>
<li><a href="../../userselectlogin.html" >Log In</a> 

<ul id="drop2">
    <li> <a href="profile.php">Owner Profile</a></li>



    
</ul>


</li>

  
    <li><a href="../../userselectsignup.html" style="color:orange;">Sign Up</a>
    
 
    


<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->


    <div id="content">
        <div id="leftBox" class="line">
            <h1 >Happy To See</h>  <h1 id="leftH1" >You! </h1>
            <p>Need an account? </p>
            <a href="../php/SignIn.php" id="btnSign"  >Sign Up</button></a>
        </div>
        <div id="rightBox" >
            <h1 id="txtSign">Sign In To Account</h1>
            <form action="" method="POST" >
                    
            <div class="input">
                
            
         
                <label>User Name-:</label>
                <input type="text" id="txtUserName" name="user" placeholder="Enter User Name" required oninvalid="this.setCustomValidity('Enter Username')" oninput="this.setCustomValidity('')">
           
           
      
                
      
 
          
                <label>PassWord-:</label>
                <input type="password" id="pass" name="pass"  class="Clpass"placeholder="Enter Password" required oninvalid="this.setCustomValidity('Enter Password')" oninput="this.setCustomValidity('')" > 
        
                <label id="showlabel"><input type="checkbox"  class="check" id="showPass" value="" onclick="showpass()" >Show Password</label>
            
         
        
           
                <button type="submit" id="btnLog" name="submit">LOG IN</button>
            </form>
            
           
        </div>

        </div>
    </div>


    <?php
    require '../config.php';

  if(isset($_POST['submit'])){
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    
    $sql = "select * from busowner WHERE UserName='".$user."' AND Password='".$pass."'";
    $result = $con->query($sql);
  
    if($result->num_rows>0){
  
      while($row = $result->fetch_assoc()){

        $dbuserid = $row['OwID'];
        $dbusername =$row['UserName'];
        $dbpassword =$row['Password'];
      }
  
    }
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
        session_start();
        $_SESSION['OwID'] = $dbuserid; 
        header("Location: profile.php");
    }
     else {  

         
  
    $message = "Invalid username or passwordr";
    echo "<script>
    alert('$message');
    window.location.href='log.php';
    </script>";

    }  
}
  
  
    ?>

   


  
<footer>
    <div class="footerDiv" id="fd1">
    
        <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
       
    <h1 class="fd1h1" ><a href="../../index.html"> BuyTickets.LK</a></h1>
        <ul id="flist">
    
            
            <li><a href="../../ContactUs.html">Contact Us </a></li>
            <li><a href="../../offers.html">Offers </a></li>
            <li><a href="../../help.html">Helps </a></li>
            <li><a href="../../Terms _ condition.html">Terms and Conditions </a></li>
            <li><a href="../../Feedback.html">FeedBack </a></li>
        </ul>
       
    </div>
    
    <div class="footerDiv" id="fd2">
        <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
    <h1 class="fd1h2">About Us</h1>
    
    <p>01.09 team developed BuyTicket.LK - an innovative online bus and train ticket booking platform that seeks a hassle-free and improved public transportation system. 
            The largest growing business in Sri Lanka and other countries, especially by bus and train. It is therefore imperative to provi
            de an adequate user-friendly innovation mechanism for bus and train ticket booking procedures.<a href="../../aboutUs.html" style="color: darkorange;">More</a></p>
    
    </div>
    <div class="footerDiv" id="fd3"><hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
    <h1>Payment Method</h1>
    <a href="https://www.mastercard.us/en-us.html" target="_blank"> <img src="../../img/navimg/MasterCard.svg" id="mastercard" ></a>
    <a href="https://www.paypal.com/us/home" target="_blank"> <img src="../../img/navimg/paypal_PNG3.png" id="paypal"></a>
    <a href="https://www.payhere.lk/" target="_blank"> <img src="../../img/navimg/PayHere-Logo.png" alt=""></a>
    <br>
    
     <h1>Bank Partner</h1>
        <a href="https://www.boc.lk/" target="_blank"><img src="../../img/navimg/boc.svg" alt=""></a>
        <a href="https://www.peoplesbank.lk/" target="_blank"><img src="../../img/navimg/peoples-bank.png" alt=""></a>
        <a href="https://www.nsb.lk/" target="_blank"><img src="../../img/navimg/National-Savings-Bank-NSB-in-Sri-Lanka.jpg" alt=""></a>
    </div>
    <div class="footerDiv" id="fd4">
    
    
    <h1>Follow Us</h1>
    
    <a href="https://www.facebook.com/" target="_blank"><img src="../../img/navimg/socialmedia/facebook-brands.svg" alt="" class="social"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../../img/navimg/socialmedia/instagram-brands.svg" alt="" class="social"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../../img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><img src="../../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
     </div>
    <div id="copyright">Copyright C@2021</div>
    </footer>

</body>
</html>