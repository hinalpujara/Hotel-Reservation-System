
 <!DOCTYPE html>
 <html lang="en">
<header>

        <nav class="navbar navbar-expand-lg navbar-light main-navigation" style="background-color: #FADBD8">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" width="200" height="50" class="d-inline-block align-center" alt="">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pl-3 custom-li">
            <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item pl-3 custom-li">
            <a class="nav-link" href="Destinations.php" style="color: black;"><b>Destinations</b> </span></a>
          </li>
          <li class="nav-item pl-3 custom-li">
            <a class="nav-link" href="rooms.php" style="color: black;"><b>Rooms</b> </span></a>
          </li>
          <li class="nav-item pl-3 custom-li">
            <a class="nav-link" href="contactus.php" style="color: black;"><b>Contact Us</b></a>
          </li>
        </ul>
        <ul class='navbar-nav ml-auto'>
        <?php
          if(isset($_SESSION["first_name"]))
          {
            echo "<a class='nav-link' href='PastBookings.php' style='color: black;'><b>Past Bookings</b></a>";
            echo "<a class='nav-link' href='logout.php' style='color: black;'><b>Logout</b></a>";
          }
          else
           {
            echo "
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  <b>Login/Register</b>
                </a>
                <div class='dropdown-menu' aria-labelled by='navbarDropdown'>
                  <a class='dropdown-item' href='userlogin.php'>User Login</a>
                  <a class='dropdown-item' href='adminlog.php'>Admin Login</a>
                  <div class='dropdown-divider'></div>
                  <a class='dropdown-item' href='register.php'>User Registration</a>
                </div>
              </li>
          </ul>";
        }
          ?>

      </div>
    </nav>
    </header>
</html>
