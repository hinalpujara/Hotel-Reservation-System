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
        header{
          position: fixed;
          width: 100%;
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
      <?php include "navbar.php"; ?>
	<form action="validate.php" method="post">
        <div class="login-box">
            <h1>ADMIN LOGIN</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin name"
                         name="adminname" value="">
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
