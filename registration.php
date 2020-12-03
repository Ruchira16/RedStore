<?php include('server.php'); ?>
<?php include "header.php"; ?>
<!DOCTYPE html> 
<html>
<head> 
  <title>SignUp Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header1">
  <h3>Register</h3>
</div>

<form method="post" action="registration.php">
  <!--display validation error here-->
  <?php include('errors.php');?>

  <div class="input-group">
    <label>Username</label>
    <input type="text" name="username"  value="<?php echo $username; ?>"> 
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div>
  <div class="input-group">
    <label>Confirm Password</label>
    <input type="password" name="password_2">
  </div>
  <div class="input-group">
    <button type="submit" name="register" class="btn1" style="color: #fff; border: none; padding-left: 0; margin-top: 10px; font-size: 20px; font-weight: 500; cursor: pointer; background: linear-gradient(-135deg, #c850c0, #4158d0); transition: all 0.3s ease; padding: 10px; border-radius: 5px;">Register</button>
  </div>
  <p>Already a member? <a href="login.php">Log In</a></p>
</form>
</body>
</html>