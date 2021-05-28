<?php
  session_start();
  ob_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="log_in.css">
    <title>Login Page</title>
    <link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        <?php include "navbar/navbarCSS.php"; ?>
    </style>
    <title>The Victoria</title>
      </head>
      <body>
      <?php include "navbar/navbar.php"; ?>
<div class="message"></div>
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <div class="login-box">
            <h1>USER LOGIN</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Email"
                         name="email" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>

            <input class="button" type="submit"
                     name="login" value="Sign In">
            <div>
              <p>Not registered?<a href="register.php"> Register Now</a></p>
            </div>
        </div>
    </form>
    <?php
        session_start();
        $message="";
            if(count($_POST)>0) {
              $_SESSION["first_name"] = "";
                $con = mysqli_connect("localhost","root","",'hotel_management') or die('Unable To connect');
                $result = mysqli_query($con,"SELECT * FROM user_data WHERE email='" . $_POST["email"] . "' and user_password = '". $_POST["password"]."'");
                $row  = mysqli_fetch_array($result);
                if(is_array($row)) {
                  $_SESSION["first_name"] = $row['first_name'];
                  $_SESSION["last_name"] = $row['last_name'];
                  $_SESSION["email"] = $row['email'];
                  header("Location:index.php");
                }
                else {
                  echo "<script language='javascript'>";
                  echo "alert('Incorrect Username or Password')";
                  echo "</script>";
                }
            }
            if(isset($_SESSION["first_name"])) {

            }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
