<?php

include "Connection.php";

if(!empty($_SESSION["id"])){
  header('Location:logout.php');
}

if(isset($_POST['btnsubmit']))
 {
   $Username=mysqli_real_escape_string($conn, $_POST['name']);
   $Email=mysqli_real_escape_string($conn, $_POST['email']);
   $pass=md5($_POST['password']);
   $cpass=md5($_POST['cpassword']);

  $select = "SELECT * FROM food WHERE Username = '$Username' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

  $error[] = 'user already exist!';

  }
  else{
    if($pass != $cpass){
        $error[] = 'password not matched!!';
    }
    else{
     
        $insert ="INSERT INTO food(Username, Email, Password) VALUES('$Username','$Email','$pass')";
         mysqli_query($conn, $insert);
         header('location:Login.php'); 

    }

  }

   };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css"/>
    <link rel="short icon" href="#"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Page</title>
</head>
<body>
    
   <div class="hero">

    <div class="login-form">

    <h1>Register</h1>
    
   <?php
    
     if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        }
     }
    
   ?>

  

   <form method="POST" class="input-box" >

   
    <input type="text" class="field" required placeholder="User Name" name="name">
   
    <input type="email" class="field" required  placeholder="E-mail" name="email">

    <input type="password" class="field" required  placeholder="Password" name="password">

    <input type="password" class="field" required  placeholder="Confirm Password" name="cpassword">

    <input type="checkbox" class="check-box"><p>Remember Password</p>

   <button type="submit" class="submit-btn" name="btnsubmit">Register</button>

   <div class="social-icon">
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-google"></i>
   </div>

   <div class="tag">
    <span>New User?</span>
    <a href="Login.php">Login</a>
   </div>


   </form>

    </div>


</div>


</body>
</html>