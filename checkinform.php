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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Us-The Victoria</title>
    <style type="text/css">
        <?php include "navbar/navbarCSS.php"; ?>
    </style>
      </head>
      <body>
      <?php include "navbar/adminnavbar.php"; ?>
    <div class="container">
    <div class="jumbotron" style="background-color: white;" >
     <img src="images/lug.png" alt="Maxwell Admin" class="mx-auto d-block img-fluid unlock-icon pt-5" style="height: 200px;">
        <form action="registrationdata.php" method="POST">
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">Customer Check-In</legend>
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
                  <br>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="row">
                  <div class="col">
                    <label for="contact">Phone number</label>
                    <input type="text" class="form-control" id="contact" aria-describedby="phoneHelp" name="contactno" placeholder="Enter phone number">
                  </div>
                  <div class="col">
                    <label for="ccn">Credit Card Number</label>
                    <input type="tel" class="form-control" placeholder="Credit Card Number" aria-label="ccn" aria-describedby="basic-addon1" name="ccn">
                  </div>
                </div>
                <br>
                <label for="inputPassword5"><b>Room Information</b></label>
                <div class="row">
                  <div class="col">
                      <label>Room No.</label>
                      <input type="text" class="form-control" placeholder="Enter first name" name="fname">
                  </div>
                  <div class="row">
                    <div class="col">
                        <label>Check-In Date</label>
                        <input class="form-control" type="date" name="checkin" required>
                    </div>
                    <div class="col">
                        <label>Check-Out Date</label>
                        <input class="form-control" type="date" name="checkin" required >
                    </div>
                  </div>
                  <div class="col">
                      <label>Room Type</label>
                      <div class="form-group">
                        <select name="type" class="form-control" required>
                              <option value="" selected hidden >Room Type</option>
                              <option>Premium</option>
                              <option>Deluxe</option>
                              <option>Luxury</option>
                          </select>
                          <span class="select-arrow"></span> <span class="form-label"></span>
                        </div>
                  </div>
                  <div class="col">
                  <label>No. of Rooms</label>
                  <div class="form-group">
                    <select name="rooms" class="form-control" required>
                          <option value="" selected hidden>No of Rooms</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                      </select>
                      <span class="select-arrow"></span> <span class="form-label"></span>
                    </div>
                </div>
                <br>
            </fieldset>
            <div class="form-group">
                <button align = "center"class="btn btn-outline-info" type="submit">Check-In</button>
            </div>
        </form>

    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
