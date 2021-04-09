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
  <title>Home-The Victoria</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0493cbe504.js" crossorigin="anonymous"></script>
  <style type="text/css">

  
@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,400;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,400;1,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&display=swap');
    
    <?php include "navbar/navbarCSS.php"; ?>

    .cards{
      width: 100vw;
      margin: 10px auto;
    }

    .row_cards{
      margin: 10px auto;
    }

    .myrow{
display: flex !important;
justify-content: space-around !important;
}

.mycard{
translate : .5s ease-in-out !important;
box-shadow : 3px 3px #888888 !important;
}

.mycard:hover{
cursor : pointer;
transform : scale(1.1);
}

.myimg{
  height: 200px;
}

.body-custom{
  font-family: 'Mulish', sans-serif;
}

.custom-heading{
  font-family: 'New Tegomin', serif;
  font-size: 50px;
}
.quotes{
  font-size: 35px;
  font-family: 'Noto Serif', serif;
}
.btn {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:#FADBD8;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  margin-top: 200px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.centered {
  color: #ffffff;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
}

  </style>
</head>

<body>
  <?php include "navbar/navbar.php"; ?>
   <div >
  <img src="https://images.thrillophilia.com/image/upload/s--Obzo5CKX--/c_fill,g_center,h_642,q_auto,w_1280/f_auto,fl_strip_profile/v1/images/photos/000/053/295/original/1463646642_Udaipur_3.jpg.jpg" alt="Udaipur" style="width:100%; height: 600px;">
  <div class="centered" style="margin-top: 200px;"><h1>Welcome to The Victoria</h1></div>
  <a class="btn" href="#Welcome">More about us</a>
</div>

  <!-- welcome!! -->
  <div class="jumbotron">
  <div class="sections_group" style="padding-top:30px;" id="Welcome">
  
    <table >
      <tr>
        <td>
          <div class="entry-content" itemprop="mainContentOfPage">
            <div class="section mcb-section   " style="padding-top:0px; padding-bottom:30px;">
              <div class="section_wrapper mcb-section-inner">
                <div class="wrap mcb-wrap one  valign-top clearfix">
                  <div class="mcb-wrap-inner">
                    <div class="column mcb-column one-second column_image ">
                      <div class="image_frame image_item no_link scale-with-grid no_border">
                        <div class="image_wrapper">
                          <img class="scale-with-grid" src="images/udaipur3.jpg" alt="home_hotel2_gallery7">
                        </div>
                      </div>
        </td>
        <td>
          <div class="column mcb-column one-second column_column  column-margin-">
            <div class="column_attr clearfix align_left" style=" padding:20px;">
              <h5>Experience the best Hospitality</h5>
              <h2><b>Welcome to The Victoria</b></h2>

              <p>With a renowned presence in cities like Jaipur, Udaipur, Nathdwara and Kumbhalgarh, the Victoria hotels have found their popularity in the land of Rajputana, Rajasthan. </p>
              <p><b>Victoria hotels provide an affordable and budgeted stay to all its guests, keeping up and maintaining with the comfort and quality of services that it offers. </b></p>
        </td>
      </tr>
    </table>
  </div>
  </div>

  <!--Cards-->
  <div class="container body-custom">
  <h2 class="prob_head m-4 text-center custom-heading">Amenities</h2>
  <h6 class="prob_desc text-center mb-3">The challenge is not a lack of food — it is making food consistently available to everyone who needs it.</h6>
  </div>
<div class="container-fluid cards body-custom">
  <div class="row mx-auto row_cards">
    <div class="col-10 mx-auto">
      <div class="row myrow pb-4">
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center">
          <div class="card my-2  mycard shadow h-100" style="width: 18rem;">
            <img src="https://img4.nbstatic.in/tr:w-500/577b59244cedfd000e025075.jpg" class="card-img-top myimg"
              alt="..." />
            <div class="card-body">
            <h4 class="text-center">SPA</h4>
              <p class="card-text card_p">Hunger kills more people each year than AIDS, malaria and terrorism combined
              </p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard shadow h-100" style="width: 18rem;">
            <img src="https://newslanded.com/wp-content/uploads/2020/04/42de7cbe3ff10d84b2a281d4172da65c.png"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
              <h5></h5>
              <p class="card-text card_p">Every 10 seconds, a child dies from hunger</p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard shadow h-100" style="width: 18rem;">
            <img
              src="https://timesofindia.indiatimes.com/thumb/msid-71497463,imgsize-383337,width-400,resizemode-4/71497463.jpg"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
              <p class="card-text card_p">82% of hungry people live in countries with food surpluses, not food shortages
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-auto row_cards">
    <div class="col-10 mx-auto">
      <div class="row myrow">
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center">
          <div class="card my-2  mycard shadow h-100" style="width: 18rem;">
            <img
              src="https://ichef.bbci.co.uk/news/400/cpsprodpb/156EE/production/_113309778_gettyimages-524903696.jpg"
              class="card-img-top myimg " alt="..." />
            <div class="card-body">
              <p class="card-text card_p">One in every eight people sleeps hungry each night</p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard shadow h-100" style="width: 18rem;">
            <img src="https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2017/08/29/980906-178891002.jpg?itok=ev1gSm8g"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
              <p class="card-text card_p">One-third of the food produced around the world is never consumed</p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard shadow h-100" style="width: 18rem;">
            <img src="https://static.toiimg.com/thumb/msid-72523533,width-1200,height-900,resizemode-4/.jpg"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
              <p class="card-text card_p">850 million hungry people in the world</p>
            </div>
          </div>
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