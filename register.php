<?php

session_start();

include("dp.php");
$username= $_POST['username'];
  $password= $_POST['password'];
  $repeatpassword = $_POST['repeat-password '];

  if(!empty($gmail)&& !empty($password)&& !is_numeric($gmail));
  {
    $query = "select"  "from form where email ='$gmail'limit ";
    $result=mysql_query($con,$query);


    if($result)
    {
      if($result && mysql_num_rows_($result)>0);
      {
        $user_date=mysqli_fetch_assoc($result);

        if($user_data['pass']== $password);
      {
        header("location:index.php ");
        die;
      }

    }
    echo"<script type='text/javascript'>alert('wrong username or password')</script>";
  }
else{
  echo"<script type='text/javascript'>alert('wrong or password')</script>";
}
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="register.css">

</head>


<body>

<div class="main">
  <div class="navbar">
  <div class="icon">
  <h2 class="logo">PraRoz</h2>
</div>


<form method="POST">
<div class="container">
    
    <div class="A1">

      <h1>Register.</h1>
      <p class="B4">Please fill this form to create an account</p>

    <div class="B2">
    <label for="email"><b>Email</b></label>
    <input  class="B21"  type="text"placeholder="Username" name="email" id="Email"  required>
    

    <label for="psw"><b>password</b></label>
    <input  type="password" placeholder="Enter password" name="psw" id="psw" required>
     
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input  type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" required>
    </div> 
    
    <p class="B4">By creating account you agree to our <a href="#"><span>Terms and Privacy</span>.</a></p>
    <button type="submit" class="registration"><a href="home.html">Register</a></button>
    <div class="B3">
      <p></p>Already have an account?<a href="register.php" class="B"> <span>sign in</span></a></p></div>
    
    </div>
  </div>

</div>
</form>


                  

</div>
</div>
   

</body>

</html>

