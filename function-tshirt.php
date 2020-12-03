<?php 
 
$db = mysqli_connect("localhost","root","","ssr");

function getPro(){
     
    global $db;
    
    $get_products = "select * from products  LIMIT 12,24";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1']; 

        $pro_img2 = $row_products['product_img2'];
        
        echo "
        
        <div class='col-4'>
                    <div class='product-grid'>
                    <div class='product-img'>
                        <a href='product_details.php?pro_id='$pro_id'>
                            <img class='pic-1' src='insert_product/images/$pro_img1' alt='  style='width:100% ;border-radius: 10px;' >
                            <img class='pic-2' src='insert_product/images/$pro_img2' alt='  style='width:100% ;border-radius: 10px;' > 
                            
                            
                            
                        </a>
                        
                        <span class='product-label'>Sale</span>
                        <span class='product-label-discount'>20%</span>
                    
                        
                        <ul class='icon'>
                            <li><a href='#'><i class='fas fa-cart-plus'></i></a></li>
                            <li><a href='#'><i class='fas fa-heart'></i></a></li>
                            <li><a href='#'><i class='fas fa-eye'></i></a></li>
                            
                        </ul>
                        
                        <a class='add-to-cart' href='product_details.php?pro_id='$pro_id'> Add to cart</a>
                        
                    </div>
                    
                    <div class='product-detail'>
                        <div class='product-title'>
                            <h3><a href='product_details.php?pro_id='$pro_id'> $pro_title</a></h3>
                        </div>
                        <div class='rating'>
                            <center>
                                <span class='material-icons'>star</span>
                                <span class='material-icons'>star</span>
                                <span class='material-icons'>star</span>
                                <span class='material-icons'>star_half</span>
                                <span class='material-icons'>star_border</span>
                            </center>
                        </div>
                        <div class='product-price'>
                            Rs. $pro_price
                        </div>
                        <a href='product_details.php?pro_id='$pro_id' class='button1'>View More</a>
                    </div>
                    
                </div>
                </div>
                







        
        
        ";
        
    }
    
}

?>