<?php   
session_start();  
if(!isset($_SESSION["user"])){  
    header("location: ../php/login.php");  
} else {  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BuyTickets.lk</title>
  <link rel="shortcut icon" href="../img/navimg/socialmedia/logo.png"></title>
    <link rel="stylesheet" href="../css/update.css">
    <link rel="stylesheet" href="../css/nav.css">

    <script src="../js/sctipt.js"></script>
 
</head>
<body>

   <!--Navigation bar Start-->
   <nav>  

<div class="logo">
    <!--Site Logo-->
    <a href="../index.html" style="text-decoration: none; ">
        <img src="../img/navimg/socialmedia/logo.png" id="logoimg">
       
      <h4>BuyTickets.LK </h4></a></div>
    <!--Navigiation Bar-->
<ul>
<li><a href="../index.html">Home</a></li>

<!--First Drop Down Menu-->
<li><a href="#">Reservation</a>

<ul>
<li> <a href="SearchBusresult.php">Bus Booking</a></li>
<li> <a href="trainserach.php">Train Booking</a></li>


</ul>
</li>

<li><a href="../php/userprofile.php">User Profile</a>

    
    
    </li>

<li><a href="../help.html">Help</a></li>
<!--Third Drop Down Menu-->


</li>
</ul>
</nav>  
 <!--Navigation bar End-->


 
 <?php

$user = $_SESSION["user"];
    require 'config.php';
    $sql = "select * from user WHERE UserName='".$user."'";
    $result = $con->query($sql);
  
    if($result->num_rows>0){
  
      while($row = $result->fetch_assoc()){
  

        $dbname =$row['Name'];
        $dbusername =$row['UserName'];
        
        $dbemail =$row['Email'];
        $dbphone =$row['Phone_No'];
        $dbNIC =$row['NIC'];
        $dbgender=$row['Gender'];
        $dbimage =$row['U_Img'];

      }
  
    }
              
       
     ?>



    </div>
    <div id="content">
       <a href="../php/userprofile.php"> <img src="../img/arrow-left-solid.svg" id="back"></a>
              
       
        <div id="rightBox" >
            <h1 id="txtSign">Update Details</h1>
                
            <div class="input">
                <form action="../php/CrudOperation/setupdatedata.php" id="subForm"  method="POST" enctype="multipart/form-data">
                  
                    <div id="left">
                        <div id="uimg">
                            <img src="../php/uploads/<?php echo $dbimage?> " alt="" id="up">
                        </div>
                        <label id="upload" for="file">Select image to upload</label>
                   
                        <input type="file" name="imageupload" id="file" onchange=" return fileValidation(event)" hidden>
                    </div>
                    <label>Name-:</label>
                <input type="text" id="txtName"  name="name"class="check"  placeholder="<?php echo $dbname ?>" oninvalid="this.setCustomValidity('Enter New Name')"  oninput="this.setCustomValidity('')" >
            
   
                
           
                <label>NIC-:</label>
                <input type="text" id="txtUserName" name="nic" class="check" placeholder="<?php echo $dbNIC ?>" oninvalid="this.setCustomValidity('Enter NIC')"  oninput="this.setCustomValidity('')" >
                <label>Email-:</label>
                <input type="email" id="email" class="check" name ="email"placeholder="<?php echo $dbemail ?>" oninvalid="this.setCustomValidity('Enter Email')"  oninput="this.setCustomValidity('')">
         
           
         
                <label>Phone No-:</label>
                <input type="number" id="PhoneNo" class="check" name="pno"placeholder="<?php echo $dbphone ?>" oninvalid="this.setCustomValidity('Enter Phone no')"  oninput="this.setCustomValidity('')" >
     
                <label>Gender-:</label>
               <select id="gen" name="select" class="check" >
                    <option value="0"  selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                
      

          
               

                

                <button type="submit"id="btnSign" >Update</button>
            </form>
            
           
        </div>

        </div>
    </div>

   
    < <footer>
<div class="footerDiv" id="fd1">

    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
   
<h1 class="fd1h1" ><a href="../index.html"> BuyTickets.LK</a></h1>
<ul id="flist">
    
            
                <li><a href="../ContactUs.html">Contact Us </a></li>
                <li><a href="../offers.html">Offers </a></li>
                <li><a href="../help.html">Helps </a></li>
                <li><a href="../Terms _ condition.html">Terms and Conditions </a></li>
                <li><a href="../Feedback.html">FeedBack </a></li>
</ul>
   
</div>

<div class="footerDiv" id="fd2">
    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1 class="fd1h2">About Us</h1>

<p>01.09 team developed BuyTicket.LK - an innovative online bus and train ticket booking platform that seeks a hassle-free and improved public transportation system. 
            The largest growing business in Sri Lanka and other countries, especially by bus and train. It is therefore imperative to provi
            de an adequate user-friendly innovation mechanism for bus and train ticket booking procedures.<a href="aboutUs.html" style="color: darkorange;">More</a></p>

</div>
<div class="footerDiv" id="fd3"><hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1>Payment Method</h1>
<a href="https://www.mastercard.us/en-us.html" target="_blank"> <img src="../img/navimg/MasterCard.svg" id="mastercard" ></a>
<a href="https://www.paypal.com/us/home" target="_blank"> <img src="../img/navimg/ez-cash.png" id="paypal"></a>
<a href="https://www.payhere.lk/" target="_blank"> <img src="../img/navimg/PayHere-Logo.png" alt=""></a>
<br>

 <h1>Bank Partner</h1>
    <a href="https://www.boc.lk/" target="_blank"><img src="../img/navimg/boc.svg" alt=""></a>
    <a href="https://www.peoplesbank.lk/" target="_blank"><img src="../img/navimg/peoples-bank.png" alt=""></a>
    <a href="https://www.nsb.lk/" target="_blank"><img src="../img/navimg/National-Savings-Bank-NSB-in-Sri-Lanka.jpg" alt=""></a>
</div>
<div class="footerDiv" id="fd4">


<h1>Follow Us</h1>

<a href="https://www.facebook.com/" target="_blank"><img src="../img/navimg/socialmedia/facebook-brands.svg" alt="" class="social"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../img/navimg/socialmedia/instagram-brands.svg" alt="" class="social"></a>
        <a href="https://www.linkedin.com/" target="_blank"><img src="../img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><img src="../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
    </div>
<div id="copyright">Copyright GroupProject@2021</div>
</footer>


</body>
</html>

<?php

  }
?>