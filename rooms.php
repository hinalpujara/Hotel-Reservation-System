<?php
  session_start();
 ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

  <title>Rooms-The Victoria</title>
  <link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://kit.fontawesome.com/0493cbe504.js" crossorigin="anonymous"></script>
  <title>Rooms-The Victoria</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap');

    <?php include "navbar/navbarCSS.php"; ?>.column {
      float: left;
      width: 33.33%;
      padding: 5px;
    }


    /* Clear floats after image containers */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }
  </style>
</head>

<body>
  <?php include "navbar/navbar.php"; ?>
  <div style="background-color: white; padding-top:50pxpx">
    <div class="section mcb-section dark  " style="padding-top:60px; padding-bottom:25px; background-color:#ffffff; background-image:url(http://hopp-inn.com/wp-content/uploads/2015/11/home_hotel2_subheader1.jpg); background-repeat:no-repeat; background-position:center; height:200px">
      <h1 style="color: white; text-align: center;padding-top:35px; font-family:cursuive; font-style:italic">Types of Rooms and Amenities</h1>
    </div>
    <div style="text-align: center; padding-top:30px">
      <h4 style="font-family: 'Merriweather', serif;">
        The rooms are well equipped and host an ambience of modern comforts, modern amenities and ensure a delightful experience throughout your stay.
      </h4>
    </div>
    <div class="conatiner" style="padding-top: 30px;">
      <div class="sections_group">
        <table>
          <div>
            <tr class="jumbotron">
              <td>
                <div class="image_wrapper ml-5 mr-5 pt-5 pb-5"><img class="scale-with-grid" src="rooms_src/room5.jpeg" alt="home_hotel2_gallery7" width="700" height="400" /></div>

              </td>
              <td>
                <div class="ml-2" style="font-family: 'Merriweather', serif;">
                  <h2><b>Deluxe</b></h2>

                  <p>These Deluxe Rooms let you relax as you admire a beautiful view of the garden.</p>
                  <p>Stay and enjoy as we provide the following Amenities for Deluxe room:</p>
                  <h4>Price: 7500/-</h4>
                  <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-wifi" style="padding-right: 20px;"></i></span>
                      <span>WiFi</span>
                    </div>
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-tv" style="padding-right: 20px;"></i></span>
                      <span>TV</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn0.iconfinder.com/data/icons/smart-home-31/68/Ac_air_air_conditioner_conditioner_icon-512.png" width="40" height="45">
                      </span>
                      <span>AC</span>
                    </div>
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn1.iconfinder.com/data/icons/appliance-1/100/dryer-03-512.png" width="40" height="45">
                      </span>
                      <span>Hair Dryer</span>
                    </div>
                  </div>
                </div>
                </div>
              </td>
            </tr>

        </table>
      </div>
      <br>
      <br>
      <div>
        <table>
          <tr class="jumbotron">
            <td>
              <div class="image_wrapper  ml-5 mr-5 pt-5 pb-5">
                <img class="scale-with-grid" src="rooms_src/room3.jpeg" alt="home_hotel2_gallery7" width="700" height="400">
              </div>
            </td>
            <td>
              <div class="ml-2" style="font-family: 'Merriweather', serif;">
                <h2><b>Premium</b></h2>

                <p>Premium rooms are modern, spacious and artistically designed, and the comfortable furniture, as well as the tranquil and peaceful atmosphere will provide a pleasant vacation and the quiet needed to complete business tasks that take up a great amount of time.</p>
                <p>Stay and enjoy as we provide the following Amenities for Premium room:</p>
                <h4>Price: 10000/-</h4>

                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-wifi" style="padding-right: 20px;"></i></span>
                      <span>WiFi</span>
                    </div>
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-tv" style="padding-right: 20px;"></i></span>
                      <span>TV</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-bacon" style="padding-right: 20px;"></i></span>
                      <span>Breakfast</span>
                    </div>
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-coffee" style="padding-right: 20px;"></i></span>
                      <span>Coffee Machine</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn0.iconfinder.com/data/icons/smart-home-31/68/Ac_air_air_conditioner_conditioner_icon-512.png" width="40" height="45">
                      </span>
                      <span>AC</span>
                    </div>
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn1.iconfinder.com/data/icons/appliance-1/100/dryer-03-512.png" width="40" height="45">
                      </span>
                      <span>Hair Dryer</span>
                    </div>
                  </div>
                </div>

              </div>
            </td>
          </tr>
        </table>
      </div>
      <br>
      <br>
      <div>
        <table>
          <tr class="jumbotron">
            <td>
              <div class="image_wrapper  ml-5 mr-5 pt-5 pb-5"><img class="scale-with-grid" src="rooms_src/room1.jpeg" alt="home_hotel2_gallery7" width="700" height="400" /></div>

            </td>
            <td>
              <div class="ml-2" style="font-family: 'Merriweather', serif;">
                <h2><b>Luxury</b></h2>

                <p>These Luxury Rooms let you relax as you admire a beautiful view of the pool. It provides the best hospitality that probably you would have never enjoyed</p>
                <p>Stay and enjoy as we provide the following Amenities for Luxury room:</p>
                <h4>Price: 15000/-</h4>
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-wifi" style="padding-right: 20px;"></i></span>
                      <span>WiFi</span>
                    </div>
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-tv" style="padding-right: 20px;"></i></span>
                      <span>TV</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-bacon" style="padding-right: 20px;"></i></span>
                      <span>Breakfast</span>
                    </div>
                    <div class="col-sm">
                      <span><i class="fas fa-2x fa-coffee" style="padding-right: 20px;"></i></span>
                      <span>Coffee Machine</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/refrigerator-192-1158827.png" width="40" height="45">
                      </span>
                      <span>Mini Refrigerator</span>
                    </div>
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn3.iconfinder.com/data/icons/electronics-4-5/512/196-512.png" width="40" height="45">
                      </span>
                      <span>Electronic Safe</span>
                    </div>
                  </div>
                  <div class="row" style="padding-top: 20px;">
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn0.iconfinder.com/data/icons/smart-home-31/68/Ac_air_air_conditioner_conditioner_icon-512.png" width="40" height="45">
                      </span>
                      <span>AC</span>
                    </div>
                    <div class="col-sm">
                      <span style="padding-right: 20px;">
                      <img src="https://cdn1.iconfinder.com/data/icons/appliance-1/100/dryer-03-512.png" width="40" height="45">
                      </span>
                      <span>Hair Dryer</span>
                    </div>
                  </div>
                </div>
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
  <div style="background-image: url(https://images.homify.com/c_fill,e_blur:500,f_auto,h_500,q_auto,w_1280/v1464689471/p/photo/image/1529500/Daughter_View01.jpg);height:200px">
    <div class="row">
      <div class="col text-center" style="padding-top: 70px;">
        <h5 style="font-family: 'Merriweather', serif;">To book your room click on the 'BOOK NOW' button</>
          <div style="padding-top: 10px;">
            <?php
            if(isset($_SESSION["first_name"]))
            {?>
              <button type="button" class="btn btn-success" onclick="document.location='booking.php'" style="background-color:#FADBD8;color:black;border:white;">BOOK NOW</button>

            <?php }
            else
            {?>
              <button type="button" class="btn btn-success" onclick="document.location='userlogin.php'" style="background-color:#FADBD8;color:black;border:white;">BOOK NOW</button>
          <?php  }?>

          </div>
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
