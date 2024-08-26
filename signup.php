<?php

session_start();

include("dp.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $username= $_POST['username'];
  $password= $_POST['password'];
  $repeat-password = $_POST['repeat-password '];

  if(!empty($gmail)&& !empty($password)&& !is_numeric($gmail));


{

  $query="insert into form(username,password,repeat-password) values ('username','password','reapeat-password')";
  mysqli_query($con,$query);

  echo"<script type='text/javascript'>alert('successfully Register')</script>";
}

else  
  {
  
    echo "<script type='text/javascrip'>alert('Please Enter some Valid Information')</script>"; 
  } 
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Webpage Design</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  
  
  <div class="main">
    <div class="navbar">
        <div class="icon">
            <h2 class="logo">PraRoz</h2>
        </div>

        <div class="menu">
        </div>


        <div class="search">
                
        </div>
    </div>
    <div class="content">
        <h1>Web Design & <br><span>Development</span><br>Course</h1>
        <p class="par">Joining a team of web designers and developers offers a dynamic and rewarding career path where <br>you can leverage your creativity, technical skills, and problem-solving abilities to make<br> a meaningful impact in the digital world.PraRoz is good place for Personal Fulfillment,<br> Seeing your designs come to life and watching them succeed in the real world<br> can be incredibly fulfilling, providing a sense of accomplishment<br> and pride in your work.</p>

            <button class="cn"><a href="#">JOIN US</a></button>
            <form method="POST">
            <div class="form">
                <h2>Login Here</h2>
                <input type="email" name="email" required placeholder="Enter Email Here">
                <input type="password" name="" required placeholder="Enter Password Here">
                <button class="btnn"><a href="signup.php">Login</a></button>

                <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</p>
                <p class="liw">Log in with</p>

              <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>     
                

            </div>
          </form>

              

    </div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>