<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style type="text/css">
    body{
    margin: 0;
    padding: 0;
    background: url("images/background-img1.jpg");
    background-color: #cccccc;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
   
}
.login-box{
    margin-top: 30px;
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.8);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}
  </style>
</head>
<body>

<div class="login-box">


  <img src="images/avatar.png" class="avatar">


<form method="post" action="login.php">
  <!--display validation error here-->
  <?php include('errors.php');?>
  <h1>Login Here</h1>
    <p>Username</p>
    <input type="text" name="username" placeholder="Enter Username">
  
  
  
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Password">
  
    <button type="submit" name="login" class="btn" style="color: #fff; border: none; padding-left: 0; margin-top: 10px; font-size: 20px; font-weight: 500; cursor: pointer; background: linear-gradient(-135deg, #c850c0, #4158d0); transition: all 0.3s ease; padding: 10px; border-radius: 5px;">Login</button>
  
  <p>Not yet a member? <a href="signup.php">Sign
  Up</a></p>
</form>

</div>
</body>
</html>