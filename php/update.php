<?php   
session_start();  
if(!isset($_SESSION["user"])){  
    header("location: ../php/login.php");  
} else {  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/animate.css">
    <script src="../js/sctipt.js"></script>
    <title>Document</title>
</head>
<body>

    <!--navigation bar-->
   <nav>  

    <div class="logo">
        
        <img src="../img/navimg/socialmedia/logo.png" id="logoimg">
        BuyTickets.LK</div>
<ul>
<li><a href="https://www.youtube.com/">Home</a></li>
<li><a href="#">Reservation</a>

<ul>
    <li> <a href="https://www.youtube.com/">Bus Booking</a></li>
    <li> <a href="https://www.youtube.com/">Train Booking</a></li>

    
</ul>

<li><a href="https://www.youtube.com/">Registration</a>

    <ul id="drop2">
        <li> <a href="https://www.youtube.com/">Bus Registration</a></li>
        <li> <a href="https://www.youtube.com/">Train Registration</a></li>
        <li> <a href="https://www.youtube.com/">Agent Registration</a></li>

        
    </ul>

</li>
<li><a href="https://www.youtube.com/">Help</a></li>

</li>
</ul>
</nav>  

 <!--navigation bar End-->

 
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
        $dbphone =$row['Phon_No'];
        $dbgender=$row['Gender'];
        $dbimage =$row['U_img'];

      }
  
    }
              
       
     ?>



    </div>
    <div id="content">
        
              
       
        <div id="rightBox" >
            <h1 id="txtSign">Update Details</h1>
                
            <div class="input">
                <form action="../php/setupdatedata.php" id="subForm"  method="POST" enctype="multipart/form-data">
                  
                    <div id="left">
                        <div id="uimg">
                            <img src="../php/uploads/<?php echo $dbimage?> " alt="" id="up">
                        </div>
                        <label id="upload" for="fileToUpload">Select image to upload</label>
                   
                    <input type="file" name="imageupload" id="fileToUpload" onchange="showPreview(event);" hidden>
                    </div>
                    <label>Name-:</label>
                <input type="text" id="txtName"  name="name"class="check"  placeholder="<?php echo $dbname ?>" >
            
   
                
           
                <label>NIC-:</label>
                <input type="text" id="txtUserName" name="nic" class="check" placeholder="Enter NIC" >
                <label>Email-:</label>
                <input type="email" id="email" class="check" name ="email"placeholder="<?php echo $dbemail ?>" >
         
           
         
                <label>Phone No-:</label>
                <input type="number" id="PhoneNo" class="check" name="pno"placeholder="<?php echo $dbphone ?>" >
     
                <label>Gender-:</label>
               <select id="gen" name="select" class="check" >
                    <option value="0"  selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                
      

          
               

                

                <button type="submit"id="btnSign"  >Sign Up</button>
            </form>
            
           
        </div>

        </div>
    </div>

   
   
    <footer>
<div class="footerDiv" id="fd1">

    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
   
<h1 class="fd1h1" ><a href="https://forum.webflow.com/t/send-nav-bar-to-front/28429"> BuyTickets.LK</a></h1>
    <ul id="flist">

        
        <li><a href="#home">Contact Us </a></li>
        <li><a href="#home">Offers </a></li>
        <li><a href="#home">Helps </a></li>
        <li><a href="#home">Terms and Conditions </a></li>
        <li><a href="#home">FeedBack </a></li>
    </ul>
   
</div>

<div class="footerDiv" id="fd2">
    <hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1 class="fd1h2">About Us</h1>

<p>If you're looking for random paragraphs, you've come to the right place. When a random word or a random sentence isn't quite enough,
     the next logical step is to find a random paragraph. We created the Random Paragraph Generator with you in mind. 
     The process is quite simple. Choose the number of random paragraphs you'd like to see and click the button.
      Your chosen number of paragraphs will instantly appear.</p>

</div>
<div class="footerDiv" id="fd3"><hr   style="color:rgb(185, 46, 46); height: 300px; float: right; " >
<h1>Payment Method</h1>
<a href="https://www.mastercard.us/en-us.html" target="_blank"> <img src="../img/navimg/MasterCard.svg" id="mastercard" ></a>
<a href="https://www.paypal.com/us/home" target="_blank"> <img src="../img/navimg/paypal_PNG3.png" id="paypal"></a>
<a href="https://www.payhere.lk/" target="_blank"> <img src="../img/navimg/PayHere-Logo.png" alt=""></a>
<br>

 <h1>Bank Partner</h1>
    <a href="https://www.boc.lk/" target="_blank"><img src="../img/navimg/boc.svg" alt=""></a>
    <a href="https://www.peoplesbank.lk/" target="_blank"><img src="../img/navimg/peoples-bank.png" alt=""></a>
    <a href="https://www.nsb.lk/" target="_blank"><img src="../img/navimg/National-Savings-Bank-NSB-in-Sri-Lanka.jpg" alt=""></a>
</div>
<div class="footerDiv" id="fd4">


<h1>Follow Us</h1>

    <a href="" target="_blank"><img src="../img/navimg/socialmedia/facebook-brands.svg" alt="" class="social"></a>
    <a href="" target="_blank"><img src="../img/navimg/socialmedia/instagram-brands.svg" alt="" class="social"></a>
    <a href="" target="_blank"><img src="../img/navimg/socialmedia/linkedin-brands.svg" alt="" class="social"></a>
    <a href="" target="_blank"><img src="../img/navimg/socialmedia/twitter-square-brands.svg" alt="" class="social"></a>
</div>
<div id="copyright">Copyright C@2021</div>
</footer>


</body>
</html>

<?php

  }
?>