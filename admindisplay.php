<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="display.css">
    <title>Contact Us-The Victoria</title>
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
    <br>
    <h2>Booking Data</h2>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hotel_management";
          $conn = new mysqli($servername, $username, $password, $dbname);
          $sql = "SELECT booking_id, email, checkin, checkout, room_type, no_of_rooms FROM booking_data ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0){
          echo "
            <div class='table-wrapper'>
            <table class='fl-table'>
            <tr>
            <th>Booking ID</th>
            <th>Email</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Room Type</th>
            <th>No. of Rooms</th>
            </tr>";

            while($row = $result->fetch_assoc()){
              echo"
                  <tr>
                  <td>
                  " .$row["booking_id"] . "
                  </td>
                  <td>
                  " . $row["email"] . "
                  </td>
                  <td>
                  " . $row["checkin"] . "
                  </td>
                  <td>
                  " . $row["checkout"] . "
                  </td>
                  <td>
                  " . $row["room_type"] . "
                  </td>
                  <td>
                  " . $row["no_of_rooms"] . "
                  </td>
                  </tr>";
            }
            echo "</table>";
            echo "</div>";
          }
          else{
            echo "0 results";
          }
          $conn->close();
          ?>
          <h2>Inquiries</h2>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hotel_management";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT Sr_No, firstname, lastname, email, city, message FROM enquire ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                echo "
                  <div class='table-wrapper'>
                  <table class='fl-table'>
                  <tr>
                  <th>Sr.No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Message</th>
                  </tr>";

                  while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                        <td>
                        " .$row["Sr_No"] . "
                        </td>
                        <td>
                        " . $row["firstname"] . "
                        </td>
                        <td>
                        " . $row["lastname"] . "
                        </td>
                        <td>
                        " . $row["email"] . "
                        </td>
                        <td>
                        " . $row["city"] . "
                        </td>
                        <td>
                        " . $row["message"] . "
                        </td>
                        </tr>";
                  }
                  echo "</table>";
                  echo "</div>";
                }
                else{
                  echo "0 results";
                }
                $conn->close();
                ?>
                <h2>Admin Data</h2>
                      <?php
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "hotel_management";
                      $conn = new mysqli($servername, $username, $password, $dbname);
                      $sql = "SELECT admin_id, first_name, last_name, contact, birthdate, adminname, password FROM admin_data ";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0){
                      echo "
                        <div class='table-wrapper'>
                        <table class='fl-table'>
                        <tr>
                        <th>Admin ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Birthday</th>
                        <th>Admin name</th>
                        <th>Password</th>
                        </tr>";

                        while($row = $result->fetch_assoc()){
                          echo"
                              <tr>
                              <td>
                              " .$row["admin_id"] . "
                              </td>
                              <td>
                              " . $row["first_name"] . "
                              </td>
                              <td>
                              " . $row["last_name"] . "
                              </td>
                              <td>
                              " . $row["contact"] . "
                              </td>
                              <td>
                              " . $row["birthdate"] . "
                              </td>
                              <td>
                              " . $row["adminname"] . "
                              </td>
                              <td>
                              " . $row["password"] . "
                              </td>
                              </tr>";
                        }
                        echo "</table>";
                        echo "</div>";
                      }
                      else{
                        echo "0 results";
                      }
                      $conn->close();
                      ?>
                      <h2>Dates & Occupancy</h2>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "hotel_management";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $sql = "SELECT no, date_of_booking, premium_availability, deluxe_availability, luxury_availability FROM booking_date ";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0){
                            echo "
                              <div class='table-wrapper'>
                              <table class='fl-table'>
                              <tr>
                              <th>Sr.No</th>
                              <th>Date of booking</th>
                              <th>Premium Availability</th>
                              <th>Deluxe Availability</th>
                              <th>Luxury Availability</th>
                              </tr>";

                              while($row = $result->fetch_assoc()){
                                echo"
                                    <tr>
                                    <td>
                                    " .$row["no"] . "
                                    </td>
                                    <td>
                                    " . $row["date_of_booking"] . "
                                    </td>
                                    <td>
                                    " . $row["premium_availability"] . "
                                    </td>
                                    <td>
                                    " . $row["deluxe_availability"] . "
                                    </td>
                                    <td>
                                    " . $row["luxury_availability"] . "
                                    </td>
                                    </tr>";
                              }
                              echo "</table>";
                              echo "</div>";
                            }
                            else{
                              echo "0 results";
                            }
                            $conn->close();
                            ?>
                            <h2>Amenities</h2>
                                  <?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $dbname = "hotel_management";
                                  $conn = new mysqli($servername, $username, $password, $dbname);
                                  $sql = "SELECT no, date_of_booking, premium_availability, deluxe_availability, luxury_availability FROM booking_date ";
                                  $result = $conn->query($sql);

                                  if ($result->num_rows > 0){
                                  echo "
                                    <div class='table-wrapper'>
                                    <table class='fl-table'>
                                    <tr>
                                    <th>Sr.No</th>
                                    <th>Date of booking</th>
                                    <th>Premium Availability</th>
                                    <th>Deluxe Availability</th>
                                    <th>Luxury Availability</th>
                                    </tr>";

                                    while($row = $result->fetch_assoc()){
                                      echo"
                                          <tr>
                                          <td>
                                          " .$row["no"] . "
                                          </td>
                                          <td>
                                          " . $row["date_of_booking"] . "
                                          </td>
                                          <td>
                                          " . $row["premium_availability"] . "
                                          </td>
                                          <td>
                                          " . $row["deluxe_availability"] . "
                                          </td>
                                          <td>
                                          " . $row["luxury_availability"] . "
                                          </td>
                                          </tr>";
                                    }
                                    echo "</table>";
                                    echo "</div>";
                                  }
                                  else{
                                    echo "0 results";
                                  }
                                  $conn->close();
                                  ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
