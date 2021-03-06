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

  <title>Destinations-The Victoria</title>
  <link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
  <style>
    <?php include "navbar/navbarCSS.php"; ?>.map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap');
    <?php include "navbar/navbarCSS.php"; ?>

    .map-container iframe {
      left: 0;
      top: 0;
      height: 500px;
      width: 100%;
      position: absolute;
    }

    .vid{
      width: auto;
      height: 75%;
    }

    .image-resize{
      height: 400px;
      width: 600px;
    }

    .color{
      padding-top: 5px;
    }

    .button-prop{
      padding-top: 180px;
      padding-left: 100px;
    }

    .custom-jumbotron{
      height: 400px;
    }
  </style>
</head>

<body>
  <?php include "navbar/navbar.php"; ?>
  <div class="embed-responsive embed-responsive-16by9 vid" style="height: 600px; background-color: black">
    <video style="width:100%" autoplay muted>
      <source src="video/udr_video.mp4" type="video/mp4">
    </video>
    <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tsDbCKUyNSk" allowfullscreen style="padding-top: 70px;"></iframe> -->
  </div>

  <!-- cards-carousel -->
  <section class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <h2 style="padding-left:420px;"><b style="font-family: 'Merriweather', serif;"> Some places to visit</b></h2>
        <div class="col-12" style="padding-top:20px;">
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" style="font-family: 'Merriweather', serif;">
              <div class="carousel-item active">
                <div class="row">

                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/shutterstock_297247478_City-Palace-1024x728.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Udaipur City Palace</h4>
                        <p class="card-text">The City Palace, located on the banks of Lake Pichola, will give you a glimpse into Rajasthan’s princely grandeur with its towering structures built for the erstwhile Mewar ruling family.</p>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/shutterstock_136794254-1024x728.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Lake Palace</h4>
                        <p class="card-text">The iconic Lake Palace will arrest you with its beauty and scenic location on the 4-km long, man-made Lake Pichola. The palace is now operated by the Taj Group and offers captivating views of the Aravalli Hills.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/1000x650-1.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Lake Pichola</h4>
                        <p class="card-text">Constructed in 1362 AD, most likely by a banjara tribesman, Lake Pichola today is an iconic symbol of Udaipur. Measuring nearly 4 Km in length and 3 Km in width, the lake is a must-see place to visit in Udaipur.</p>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/maharana-pratap.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Maharana Pratap Memorial</h4>
                        <p class="card-text">Right at the top of the Moti Magri, overlooking the Fateh Sagar Lake is a lifelike statue of Udaipur’s most celebrated ruler, Maharana Pratap and his beloved horse Chetak.</p>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/shutterstock_353005094-1024x728.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Sajjangarh Palace</h4>
                        <p class="card-text">Built by Maharana Sajjan Singh in 1884, the Sajjangarh Palace should be on your list of places to visit in Udaipur mainly for the spectacular panoramic views of Udaipur city and its stunning lakes.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://www.fabhotels.com/blog/wp-content/uploads/2017/10/Image_1.jpg" style="height:250px;">
                      <div class="card-body">
                        <h4 class="card-title">Jagmandir</h4>
                        <p class="card-text">Another romantic destination in Udaipur, this 17th-century palace complex is also situated on Lake Pichola. Also, known as Lake Garden Palace, Jagmandir will draw you with its sheer splendor and tranquility.</p>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-6 text-right">
          <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

      <div class="container">
        <div class="jumbotron color custom-jumbotron">
          <div class="row g-0">
		        <div class="col-auto">
              <img
                src= "https://c.tenor.com/_nZik2r_0poAAAAj/oncoming-taxi-waiting-taxi.gif"
                alt="..."
                class="image-fluid image-resize"
              />
            </div>
            <div class="col button-prop">
              <button type="button" class="btn btn-outline-secondary btn-lg" onclick="document.location='https://www.uber.com/jp/en/ride/ubertaxi/'">Book a cab now!</button>
            </div>
		      </div>
        </div>
      </div>

  <!--Google map-->
  <div style="padding-top:30px;">
    <h2 style="text-align:center; font-family: 'Merriweather', serif;"> Here is The Map to help you find your Destination!!</h2>
    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
      <iframe src="http://maps.google.com/maps?q=places+to+visit+in+udaipur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  < <!--Google Maps-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
