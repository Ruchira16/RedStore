<!DOCTYPE html> 
 
<html lang="en" dir="ltr"> 
  <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style1.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
  </head>
  <body>
  
		<div id="topbar">
		
			<div id="signin-div" class="topbar-section">
			
				<span class="material-icons" id="signin-image">account_circle</span>
				
				<span class="sign-text"> Signin </span>
				
			</div>
			
			<div id="cart-div" class="topbar-section">
			
				<span class="material-icons" id="cart-image"> add_shopping_cart</span>
				
				<span class="cart-text"> Cart </span>
				
			
			</div>
  
		<div class="btn">
		  <span class="fas fa-bars"></span>
		</div>
		<nav class="sidebar">
			  <div class="text">Side Menu</div>
		<ul>
			<li class="active"><a href="#">Dashboard</a></li>
			<li>
				 <a href="#" class="feat-btn">Electronics
				<span class="fas fa-caret-down first"></span>
				</a>
		<ul class="feat-show">
			<li><a href="#">Mobiles</a></li>
			<li><a href="#">Laptops</a></li>
		</ul>
			</li>
			<li>
				 <a href="#" class="serv-btn">Fashion
				<span class="fas fa-caret-down second"></span>
				 </a>
		<ul class="serv-show">
			<li><a href="#">Mens Wear</a></li>
			<li><a href="#">Womens Wear</a></li>
		</ul>
			</li>
			<li><a href="#">Sports</a></li>
			<li><a href="#">Books</a></li>
			<li><a href="#">Kids Fashion</a></li>
			<li><a href="#">Feedback</a></li>
		</ul>
		</nav>
		
		
		<div class="search-container" >
			<form action="/action_page.php">
				<input type="text" placeholder="Search">
				<button type="submit">Submit</button>
			</form>
		</div>
			
		<div class="inner_header">
			<ul  style="list-style-type:none" class="navigation">
				<a><li> Home</li></a>
				<a><li> About</li></a>
				<a><li> Contact</li></a>
				<a><li> language</li></a>
			</ul>
		</div>
	
	
	
	<script>
		$('.btn').click(function(){
			$(this).toggleClass("click");
			$('.sidebar').toggleClass("show");
		});
		 $('.feat-btn').click(function(){
			$('nav ul .feat-show').toggleClass("show");
			$('nav ul .first').toggleClass("rotate");
		});
		 $('.serv-btn').click(function(){
			$('nav ul .serv-show').toggleClass("show1");
			$('nav ul .second').toggleClass("rotate");
		 });
		 $('nav ul li').click(function(){
			$(this).addClass("active").siblings().removeClass("active");
		});
    </script>

  </body>
</html>
