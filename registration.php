<?php
require 'config.php';

if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["psw"];
  $confirmpassword = $_POST["psw-repeat"];

  $select = " SELECT * FROM phpintern.client WHERE username='$email' OR password ='$password'";

  $hi = mysqli_query($con, $select);

  if(mysqli_num_rows($hi) > 0){
    echo
    "<script>alert('Email or Password is already in use')</script>";
  }
  else{
    if($password == $confirmpassword){

      $insert = "INSERT INTO phpintern.client(username,password) VALUES('$email','$password')";
      mysqli_query($con,$insert);
      echo
    "<script>alert('Password is matched')</script>";
    
      
    }
    else{
      echo
    "<script>alert('Password is not matched')</script>";
    }


  }





}

?>



<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button name="submit" type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form> 
</body>
</html>