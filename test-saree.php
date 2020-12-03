<?php
  include "header.php"; 
  include("db.php");
include("functions/function-saree.php");
  $con = mysqli_connect('localhost', 'root', '', 'ssr');


?>
<!DOCTYPE html>
<html> 
<head>
  <title>Women Western Wear</title>
  <meta charset="UTF-8">
  
    <link rel="stylesheet" href="style1.css">
   
  <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<div class="small-container">
  <div class="row">

  <?php 

    getPro();         
            
  ?>
</div>
</div>
<!---FOOTER---->
  <div class="footer">
        
         <div class="inner-footer">
           
           <div class="footer-items">
            <h1>ABCEFGH</h1>
             <img src="images/logo.png">
             <p>
              Our Purpose is to Sustainably Make the Pleasure and Benefits of Luxurious Lifestyle Accessible to 
              Many.
             </p>
        
            
           </div>
        
             <div class="footer-items">
            <h2>Quick Links</h2>
             <div class="border"></div>
             <ul>
              <a href=""><li>Home</li></a>
              <a href=""><li>About Us</li></a>
              <a href=""><li>FAQ</li></a>
              <a href=""><li>Terms and Policies</li></a>
             </ul>
         </div>
              <div class="footer-items">
            <h2>Policy Info</h2>
             <div class="border"></div>
             <ul>
              <a href=""><li>Privacy Policy</li></a>
              <a href=""><li>Terms of Sales</li></a>
              <a href=""><li>Terms of Use</li></a>
              <a href=""><li>Report Abuse & Takedown Policy</li></a>
             </ul>
         </div>
            
            <div class="social-media">
            <h2>Connect Us</h2>
             <div class="border"></div>
            
              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>             
             
         </div>
            <div class="social-media">
            <h2>Payment</h2>
             <div class="border"></div>
                <a href=" "><i class="fa fa-credit-card" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-wallet" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
             </div>       
      
              <div class="footer-bottom">
                Copyright &copy; ABCDEF 2020. All rights reserved.
              </div>
      </div>
     </div>
    
    
</body>
</html>