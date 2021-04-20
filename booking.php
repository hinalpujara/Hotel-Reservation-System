<?php
  session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Booking-The Victoria</title>
    <link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">

       <?php include "navbar/navbarCSS.php"; ?>

        body {
            background-image: white
        }

        .section {
            position: relative;
            height: 100vh
        }

        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        #booking {
            font-family: 'Raleway', sans-serif
        }

        .booking-form {
            position: relative;
            max-width: 642px;
            width: 100%;
            margin: auto;
            padding: 40px;
            overflow: hidden;
            background-size: cover;
            border-radius: 5px;
            z-index: 20
        }

        .booking-form::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background: #FADBD8;
            z-index: -1
        }

        .booking-form .form-header {
            text-align: center;
            position: relative;
            margin-bottom: 30px
        }

        .booking-form .form-header h1 {
            font-weight: 700;
            text-transform: capitalize;
            font-size: 42px;
            margin: 0px;
            color: black;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 30px
        }

        .booking-form .form-control {
            background-color: rgba(255, 255, 360, 0.2);
            height: 60px;
            padding: 0px 25px;
            border: none;
            border-radius: 40px;
            color: black;
            -webkit-box-shadow: 0px 0px 0px 2px transparent;
            box-shadow: 0px 0px 0px 2px transparent;
            -webkit-transition: 0.2s;
            transition: 0.2s
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: black;
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: black;
        }

        .booking-form .form-control::placeholder {
            color: black;
        }

        .booking-form .form-control:focus {
            -webkit-box-shadow: 0px 0px 0px 2px black;
            box-shadow: 0px 0px 0px 2px black;
        }

        .booking-form input[type="date"].form-control {
            padding-top: 16px
        }

        .booking-form input[type="date"].form-control:invalid {
            color: black;
        }

        .booking-form input[type="date"].form-control+.form-label {
            opacity: 1;
            top: 10px
        }

        .booking-form select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .booking-form select.form-control:invalid {
            color: black;
        }

        .booking-form select.form-control+.select-arrow {
            position: absolute;
            right: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 32px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: black;
            font-size: 14px
        }

        .booking-form select.form-control+.select-arrow:after {
            content: '\279C';
            display: block;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .booking-form select.form-control option {
            color: black;
        }

        .booking-form .form-label {
            position: absolute;
            top: -10px;
            left: 25px;
            opacity: 0;
            color: black;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.3px;
            height: 15px;
            line-height: 15px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all
        }

        .booking-form .form-group.input-not-empty .form-control {
            padding-top: 16px
        }

        .booking-form .form-group.input-not-empty .form-label {
            opacity: 1;
            top: 10px
        }

        .booking-form .submit-btn {
            color: black;
            background-color: white;
            font-weight: 700;
            height: 60px;
            padding: 10px 30px;
            width: 100%;
            border-radius: 40px;
            border: none;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: 1.3px;
            -webkit-transition: 0.2s all;
            transition: 0.2s all
        }

        .booking-form .submit-btn:hover,
        .booking-form .submit-btn:focus {
            opacity: 0.9
        }
    </style>
    <title>The Victoria</title>
      </head>
      <body>
      <?php include "navbar/navbar.php"; ?>
      <br>
      <br>
    <div id="booking" class="section">
      <div class="section-center">
          <div class="container">
              <div class="row">
                  <div class="booking-form">
                      <div class="form-header">
                          <h1>Book Your Room</h1>
                      </div>
                      <form action="bookingconnection.php" method="post">

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <input class="form-control" type="date" name="checkin" required>
                                    <span class="form-label">Check In</span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <input class="form-control" type="date" name="checkout" required>
                                    <span class="form-label">Check out</span>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                    <select name="rooms" class="form-control" required>
                                          <option value="" selected hidden>No of Rooms</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                      </select>
                                      <span class="select-arrow"></span> <span class="form-label">Rooms</span>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-group">
                                    <select name="type" class="form-control" required>
                                          <option value="" selected hidden >Room Type</option>
                                          <option>Premium</option>
                                          <option>Deluxe</option>
                                          <option>Luxury</option>
                                      </select>
                                      <span class="select-arrow"></span> <span class="form-label">Room Type</span>
                                    </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                    <span class="form-label">Email</span>
                                  </div>
                              </div>
                          </div>
                          <div class="form-btn"> <button class="submit-btn" href="payment.php">Book Now</button> </div>
                      </form>
                  </div>
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
