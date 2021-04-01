<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Rooms-The Victoria</title>
    <style>
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
        .column {
            float: left;
            width:33.33%;
            padding: 5px;
        }

/* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
                }
        .ml-4 {
          margin-left: (spacer * 1.25) !important;
              }
        .ml-2 {
          margin-left: (spacer * .50) !important;
              }
        .btn{
          background-color: #FADBD8;
          border:  #FADBD8;
          color: black;
        }
    </style>
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
  <div style="background-color: white;">
    <br>
    <div>
        <h1 style="font-style: italic; text-align: center;" >
            Types of Rooms and Amenities
        </h1>
    </div>
    <br>
    <br>
    <div class="conainer">
      <div class="ml-4">
      <div class="sections_group">
        <div>
        <table>
         <tr>
            <td>
              <div class="image_wrapper"><img class="scale-with-grid" src="rooms_src/room5.jpeg" alt="home_hotel2_gallery7" width="700" height="400" /></div>

          </td>
          <td>
              <div class="ml-2">
                <h2 style="font-style: italic;"><b>Deluxe</b></h2>

                <p>These Deluxe Rooms let you relax as you admire a beautiful view of the garden.</p>
                <h5>Stay and enjoy as we provide the following Amenities for <b style="font-style: italic;">Deluxe</b> room</h5>
                <ul>
                  <li>
                    <b>WiFi</b>
                  </li>
                  <li>
                    <b>Hair Dryer</b>
                  </li>
                  <li>
                    <b>AC</b>
                  </li>
                  <li>
                    <b>TV</b>
                  </li>
                </ul>
              </div>
          </td>
        </tr>
      </table>
      </div>
      <br>
      <br>
      <div>
      <table>
        <tr>
          <td>
            <div class="image_wrapper">
              <img class="scale-with-grid" src="rooms_src/room3.jpeg" alt="home_hotel2_gallery7" width="700" height="400">
            </div>
          </td>
          <td>
            <div class="ml-2">
              <h2 style="font-style: italic;"><b>Premium</b></h2>

              <p>Premium rooms are modern, spacious and artistically designed, and the comfortable furniture, as well as the tranquil and peaceful atmosphere will provide a pleasant vacation and the quiet needed to complete business tasks that take up a great amount of time.</p>
              <h5>Stay and enjoy as we provide the following Amenities for <b style="font-style: italic;">Premium</b> room</h5>
              <ul>
                <li>
                  <b>WiFi</b>
                </li>
                <li>
                  <b>Hair Dryer</b>
                </li>
                <li>
                  <b>AC</b>
                </li>
                <li>
                  <b>TV</b>
                </li>
                <li>
                  <b>Breakfast</b>
                </li>
                <li>
                  <b>Cofee Machine</b>
                </li>
              </ul>
            </div>
          </td>
        </tr>
      </table>
    </div>
    <br>
    <br>
    <div>
      <table>
       <tr>
          <td>
            <div class="image_wrapper"><img class="scale-with-grid" src="rooms_src/room1.jpeg" alt="home_hotel2_gallery7" width="700" height="400" /></div>

        </td>
        <td>
            <div class="ml-2">
              <h2 style="font-style: italic;"><b>Luxury</b></h2>

              <p>These Luxury Rooms let you relax as you admire a beautiful view of the pool. It provides the best hospitality that probably you would have never enjoyed</p>
              <h5>Stay and enjoy as we provide the following Amenities for <b style="font-style: italic;">Luxury</b> room</h5>
              <ul>
                <li>
                  <b>WiFi</b>
                </li>
                <li>
                  <b>Hair Dryer</b>
                </li>
                <li>
                  <b>AC</b>
                </li>
                <li>
                  <b>TV</b>
                </li>
                <li>
                  <b>Mini Fridge</b>
                </li>
                <li>
                  <b>Electronic safe</b>
                </li>
                <li>
                  <b>Breakfast</b>
                </li>
                <li>
                  <b>Cofee Machine</b>
                </li>
              </ul>
            </div>
        </td>
      </tr>
    </table>
    </div>
    </div>
  </div>
  </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <button type="button" class="btn btn-success" href="booking.php">BOOK NOW</button>
            </div>
        </div>
    </div>
    <br>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
