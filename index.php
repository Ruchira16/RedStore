<?php include "header.php";

 
 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }



 ?>
<!DOCTYPE html>
<html>
<head>
  <?php  if (isset($_SESSION['username'])) { ?>
      <title>Welcome, <?php echo $_SESSION['username']; ?></title>

      
    <?php } else{ ?>
      <title><?php echo "Shopper's Stop"; ?></title>
    <?php } ?> 
  
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
  <link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   
  
	
 </head>
 <body>
  
  <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    
 <div class="header" style="margin-top: 20px;">
	<div class="container">
		<div class="navbar">
      <div class="logo">
        <img src="" alt="">
      </div>
      
	</div> 
		<div class="row">
			<div class="col-2">
				<h1>Give Your Life<br> A New Style!</h1>
				<p>Success isn't always about greatness. It's about consistency. Consistent<br> hard work gains success. Greatness will come. <p>
				<a href="signup.php" class="button">Explore Now &#8594;</a>
			
			</div>
			<div class="col-2">
				<img src="images/images.png">
			</div>
		
		</div>
		
	</div>
</div>





<!--feaured categories-->
<div class="heading"><h4><center>Featured Categories</center></h4></div>
<section class="variable slider">
	
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/men's aparrels.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <span class="card-title"><center><strong>Men's Fashion</strong></center></span>
			<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/women aparrels.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;" >
            <span class="card-title"><center><strong>Women Fashion</strong></center></span>
			<a href="fashion.php" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/Laptop.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <span class="card-title"><center><strong>Laptops & Mobiles</strong></center></span>
			<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/books.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <span class="card-title"><center><strong>Books</strong></center></span>
			<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/sports.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <span class="card-title"><center><strong>Sports Fashion</strong></center></span>
			<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <img src="images/kids-1.jpg" style="width:100%; height: 200px;">
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <span class="card-title"><center><strong>Kids Fashion</strong></center></span>
			<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  
  

</section>
	


<!--feaured products-->
<div class="heading"><h4><center>Featured Products</center></h4></div>
	<section class="variable slider">
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <a href="#"><img src="images/dell vostro.jpg" style="width:100%"></a>
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <a href="#">Dell Vostro Core i3 10th Gen - (4 GB/1 TB HDD/Windows 10 Home)</a>
            <div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.34,776.00</p>
			<br>
				<center><strong>Rs.34,776.00</strong></center>
				<a href="something" class="button1">View More</a>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <a href="#"><img src="images/hp pavilion.jpg"></a>
            
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
            <a href="#">HP Pavilion Gaming Ryzen 5 Quad Core Gaming Laptop</a>
            <div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<br>
				<center><strong>Rs.54,990.00</strong></center>
				<a href="#" class="button1">View More</a>
				<br>
				<br>
				<br>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <a href="#"><img src="images/acer aspire.jpg"></a>
          </div>
          <div class="card-content" style="margin: 10px 10px 10px 10px; font-size: 20px;">
           <a href="#">Acer Aspire 5 Core i3 10th Gen - (4 GB + 32 GB Optane/512 GB SSD/Windows 10 Home)</a>
            <div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
				</div>
				
				<br>
				
				<center><strong>Rs.39,990.00</strong></center>
				<a href="something" class="button1">View More</a>
				
			</div>
          </div>
        </div>
        
      </div>
      
    </div>
  <div>
    <div class="row">
      <div class="col s12 m7">
        <div class="card" style="width: 250px;">
          <div class="card-image">
            <a href="#"><img src="images/asus vivobook.jpg" style="width:100%"></a>
            
          </div>
          <div class="card-content" style="margin: 10px 10px 0 10px; font-size: 20px;">
			<a href="#">Asus VivoBook 14 Core i3 10th Gen - (4 GB/256 GB SSD/Windows 10 Home) </a>
            <div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<br>
				<center><strong>Rs.36,990.00</strong></center>
				<a href="something" class="button1">View More</a>
				<br>
				<br>
			</div>
            
          </div>
        </div>
        
      </div>
      
    </div>

  </div>
  

</section>
	
	<div class="small-container">
  <div class="heading"><h4><center>Latest Products</center></h4></div>
		<div class="row">
			<div class="col-4">
				<img src="images/product-5.jpg" style="width:100%">
				<h4>Men's Shoes</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.1099.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-6.jpg" style="width:100%">
				<h4>Puma Black T-Shirt</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.1399.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-7.jpg" style="width:100%">
				<h4>HRX Running Socks</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.499.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-8.jpg" style="width:100%">
				<h4>Watch For Men</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
				</div>
				<p>Rs.1299.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="row">
			<div class="col-4">
				<img src="images/product-9.jpg" style="width:100%">
				<h4>Watch For Men</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.1999.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-10.jpg" style="width:100%">
				<h4>Shoes For Men</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
						<span class="material-icons">star_border</span>
				</div>
        				<p>Rs.2999.00</p>
                <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-11.jpg" style="width:100%">
				<h4>Casual Shoes for Men</h4> 
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_border</span>
				</div>
				<p>Rs.999.00</p>
        <a href="something" class="button1">View More</a>
			</div>
			
			<div class="col-4">
				<img src="images/product-12.jpg" style="width:100%">
				<h4>Trackpants For Men</h4>
				<div class="rating">
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star</span>
						<span class="material-icons">star_half</span>
				</div>
				<p>Rs.899.00</p>
        <a href="something" class="button1">View More</a>
			</div>
		
		
	</div>
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
	




	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick-master/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
  $(".variable").slick({
        dots: false,
        infinite: true,
        variableWidth: true
      });
  });
</script>

 </body>
	
 </html>