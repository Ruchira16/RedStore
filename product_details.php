<?php include "header.php"; 
include "functions/functions.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    line-height: 1.5;
}
.card-wrapper{
    max-width: 800px;
    margin-top: 200px ;
    margin-left: 200px;
    margin-bottom: 200px;
    justify-content: center;
}
img{
    width: 80%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
    height: 80%;
}
.img-showcase img{
    min-width: 100%;
    margin-bottom: 5px;
}
.img-select{
    display: flex;
    margin-top: 5px;
}
.img-item{
    margin: 5px;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
    margin-top: 10px;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    
}

.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-details h3{
    text-transform: uppercase;
    font-size: 5px;
    color: #12263a;
    padding-bottom: 3px;
}
.product-details p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-details ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-details ul li{
    margin: 0;
    list-style: none;
    background: url(images/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-details ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn-1{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn-1{
    cursor: pointer;
    color: #fff;
}
.purchase-info .btn-1:first-of-type{
    background: #256eff;
}
.purchase-info .btn-1:last-of-type{
    background: #f64749;
}
.purchase-info .btn-1:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
}
    </style>
  </head>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "images/women-accessories/necklace-1.jpg" alt = "shoe image" style="width: 80%;border-radius: 15px;">
              <img src = "images/women-accessories/necklace-2.jpg" alt = "shoe image" style=" width: 80%; border-radius: 15px;">
              <img src = "images/women-accessories/necklace-3.jpg" alt = "shoe image" style="width: 80%; border-radius: 15px;">
             
            </div>
          </div>
          <div class = "img-select" style="margin-top: 10px;">
            <div class = "img-item" style="margin-top: 10px;">
              <a href = "test-tshirt.php?pro_id=<?php echo $pro_id; ?>" data-id = "1">
                <img src = "images/women-accessories/necklace-1.jpg" alt = "shoe image" style="width: 80%; border-radius: 15px; margin-top: 10px;">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "images/women-accessories/necklace-2.jpg" alt = "shoe image" style="width: 80%; border-radius: 15px; margin-top: 10px;">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "images/women-accessories/necklace-3.jpg" alt = "shoe image" style="border-radius: 15px; width: 80%; margin-top: 10px;">
              </a>
            </div>
            
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <p class = "product-title">Priyaasi Rose Gold-Plated American Diamond Studded Handcrafted Jewellery Set</p>
          
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
           <!-- <p class = "last-price">Old Price: <span>$257.00</span></p>-->
            <p class = "new-price">Price: <span>Rs.2169.00</span></p>
          </div>

          <div class = "product-details">
            <h2>about this item: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul style="color: black;">
              <li>Color: <span>Black</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>Shoes</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div> 

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn-1">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn-1">Buy Now</button>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
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
            
             <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>            
             
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

    
    <script >
            const imgs = document.querySelectorAll('.img-select a');
      const imgBtns = [...imgs];
      let imgId = 1;

      imgBtns.forEach((imgItem) => {
          imgItem.addEventListener('click', (event) => {
              event.preventDefault();
              imgId = imgItem.dataset.id;
              slideImage();
          });
      });

      function slideImage(){
          const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

          document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
    </script>
  </body>
</html>