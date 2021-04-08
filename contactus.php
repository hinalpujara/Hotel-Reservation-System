<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us-The Victoria</title>
    <style type="text/css">
        <?php include "navbar/navbarCSS.php"; ?>

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
      </head>
      <body>
      <?php include "navbar/navbar.php"; ?>
    <div class="bkg-img">CONTACT US</div>
</div>
<div class="jumbotron">
    <h1 style="padding-bottom: 20px; text-align: center;">ENQUIRE HERE</h1>
  <form action="inquires.php" method="post">
    <div class="row">
    <div class="col">
        <label>First name</label>
        <input type="text" class="form-control" placeholder="Enter first name" name="fname">
    </div>
    <div class="col">
        <label>Last name</label>
        <input type="text" class="form-control" placeholder="Enter last name" name="lname">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Enter city" name="city">
    </div>
    <div class="form-group">
        <label for="inputMessage">Message</label>
        <input type="text" class="form-control" id="inputMessage" placeholder="Write your message here..." name="message">
    </div>
<div class="text-center">
    <button type="submit" class="btn custom-btn" href="contactus.php">Send a message</button>
</div>
</form>
</div>
<div class="container">
<div class="row">
<div class="col">
    <div class="container-fluid pl-5">
        <div class="jumbotron mycustom-jumbotron">
            <h2>The Victoria, Udaipur</h2>
            <div class="card mb-3 loc">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="pin.png"
                    class="img-fluid img-size"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body image-card">
                    <h6 class="card-title" style="">
                        <b>Address</b>
                    </h6>
                    <p>
                        6/12 Near Goverdhan Sagar Lake, Sector - 14 Udaipur - 313002
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 loc">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="phone.png"
                    class="img-fluid img-size"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body image-card">
                    <h6 class="card-title" style="">
                        <b>Contact Number</b>
                    </h6>
                    <p>
                        +91 89765 14635<br>+91 99301 25372<br>+91 87793 69930
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3 loc">
              <div class="row g-0">
                <div class="col-md-4">
                  <img
                    src="mail.png"
                    class="img-fluid img-size"
                  />
                </div>
                <div class="col-md-8">
                  <div class="card-body image-card">
                    <h6 class="card-title" style="">
                        <b>Email Us On</b>
                    </h6>
                    <p>
                        priyal.babel@somaiya.edu<br>pinaki.j@somaiya.edu<br>hinal.pujara@somaiya.edu
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="col">
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.4128601194466!2d73.68429211447116!3d24.540391064055807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967ef020640d65b%3A0x1accb6465761f702!2sHotel%20Hopp%20Inn!5e0!3m2!1sen!2sin!4v1614706368929!5m2!1sen!2sin" width="500" height="600" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>
</div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
