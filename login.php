<?php 

require 'config.php';

if(isset($_POST["submit"])){
    $username = $_POST['email'];
    $password = $_POST['password'];

    $hek = mysqli_query($con,"SELECT * FROM phpintern.client WHERE username = '$username'");

    $row = mysqli_fetch_assoc($hek);

    if(mysqli_num_rows($hek)> 0){
        if($password == $row['password']){

          

            echo
            "<script>alert('success')</script>";
            header('location:index.php');
            
        }
        else{
            echo

            "<script>alert(' Password is not matched')</script>";
        }
    }
    else{
        echo
        "<script>alert('user not registered')</script>";
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
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="" method="post">
        <input type="text" name ="email" placeholder="Enter your email">
        <input type="password" name ="password" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <button name="submit" type="submit" class="registerbtn">LOginin</button>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
        <a href="registration.php">Sign up</a>
        </span>
      </div>
    </div>
  </div>
</body>
</html>