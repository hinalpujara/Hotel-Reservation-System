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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .bkg-img{
            background-image: url("udr.jpg");
            /*margin-top: 0;*/
            font-size: 50px;
            color: white;
            text-align: left;
            font-family: "Georgia",Serif;
            font-weight: bold;
            align-content: bottom;
            padding-top: 425px;
            padding-left: 50px;
            text-shadow: 0 5px 10px black;
        }
        li{
            font-size: 20px;
        }
        .mycustom-jumbotron {
              height: 600px;
              width: 500px;
              background-color: #FADBD8
            }
        .custom-btn{
            background-color: #FADBD8;
            border-width: 1px;
            border-color: black;

        }
        .loc{
            background: transparent;
            border: 0px;
        }
        .img-size{
            width: 70px;
            height: 80px;
        }
        .image-card {
            padding-left: -15px !important;
            margin-left:-80px !important;
}
        .map-block{
            display: inline-block;
        }
    </style>
    <title>The Victoria</title>
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FADBD8">
        <a class="navbar-brand" href="#">
          <img src="logo.png" width="200" height="50" class="d-inline-block align-center" alt="">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pl-3">
            <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="#" style="color: black;"><b>About</b> </span></a>
          </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="rooms.php" style="color: black;"><b>Rooms</b> </span></a>
          </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="booking.php" style="color: black;"><b>Book</b></a>
          </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="contactus.php" style="color: black;"><b>Contact Us</b></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Login/Register</b>
              </a>
              <div class="dropdown-menu" aria-labelled by="navbarDropdown">
                <a class="dropdown-item" href="userlogin.php">User Login</a>
                <a class="dropdown-item" href="adminlog.php">Admin Login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="register.php">User Registration</a>
              </div>
            </li>
        </ul>
      </div>
    </nav>
	<form action="user_login_validation.php" method="post">
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
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
