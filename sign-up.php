<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
   
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <style type="text/css">
         *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

body{
    font-family: 'Raleway', sans-serif;
    background: #000;
}

.background{
    background: url(images/background-img1.jpg) no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
}

.text{
    margin-top: 45vh;
    flex: 1;
}

.box{
    margin-top: 33vh;
    flex: 1;
}

.text{
    margin-left: 10%;
    font-weight: 300px;
}

.box{
    margin-left: 5%;
    width: 320px;
    height: 560px;
    background: rgba(0, 0, 0, 0.9);
    color: #fff;
    top: 20%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.text h1{
    font-size: 70px;
    color: #fff;
    font-weight: 500;
}

.text p{
    font-size: 20px;
    color: #fff;
    font-weight: 300;
}

.text p a{
    color: #fff;
    font-weight: 700;
}

.form{
    background: transparent;
    color: #fff;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    width: 250px;
}

input{
    margin: 20px 0;
    padding: 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-family: 'Raleway', sans-serif;
}

.username, .password, .fullname, .email{
    border-bottom: 1px solid #fff;
}

.button{
    background: transparent;
    border: 1px solid #fff;
    color: #fff;
    font-size: 18px;
}

.button:hover{
    background: #fff;
    color: #000;
}
    </style>
</head>
<body> 
    <main>
        <div class="background">
            
            <div class="box">
                <h1>SignUp</h1>
                <form method="post" action="sign-up.php" id="form">
  <!--display validation error here-->
                      <?php include('errors.php');?>

                        
                        
                        <input type="text" name="username" class="fullname" placeholder="Full Name" required  id="username" value="<?php echo $username; ?>"> 
                      
                      
                        
                        <input type="text" name="email" class="email" placeholder="someone@abc.com" required id="email" value="<?php echo $email; ?>">
                      
                      
                        
                        <input type="password" class="password" placeholder="Password" required id="password_1" name="password_1">
                     
                      
                        
                        <input type="password" class="password" placeholder="Confirm Password" required name="password_2" id="password_2">
                     
                      
                        <button type="submit" name="register" class="btn1" style="color: #fff; border: none; padding-left: 0; margin-top: 10px; margin-bottom: 10px; font-size: 20px; font-weight: 500; cursor: pointer; background: linear-gradient(-135deg, #c850c0, #4158d0); transition: all 0.3s ease; padding: 10px; border-radius: 5px;">Register</button>
                      
                      <p>Already a member? <a href="login.php">Log In</a></p>
                </form>
                
            </div>
        </div>
    </main>
</body>
</html>