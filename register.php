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
      <?php include "navbar/navbar.php"; ?>
    <div class="container">
    <div class="jumbotron" style="background-color: white;" >
     <img src="images/avatar.png" alt="Maxwell Admin" class="mx-auto d-block img-fluid unlock-icon pt-5" style="height: 200px;">
        <form action="registrationdata.php" method="POST">
            <fieldset class="form-group">
                <legend class="border-bottom mb-4">Customer Registration</legend>
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
                  <label for="contact">Phone number</label>
                  <input type="text" class="form-control" id="contact" aria-describedby="phoneHelp" name="contactno" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <label for="inputPassword5">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter password" name="password">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </small>
                <label for="inputPassword5"> Re-enter Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter password" name="password_reenter">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </small>
            </fieldset>
            <div class="form-group">
                <button class="btn btn-outline-info" type="submit">Sign Up</button>
            </div>
        </form>
        <div class="border-top pt-3">
            <small class="text-muted">Already a Member?<a class="ml-2" href="userlogin.php">Sign In</a></small>
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
