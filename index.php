<?php
  session_start();
 ?>
<!doctype html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Home-The Victoria</title>
  <link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://kit.fontawesome.com/0493cbe504.js" crossorigin="anonymous"></script>
  <style type="text/css">


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
translate:.5s ease-in-out !important;
box-shadow :0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
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
  <div class="centered" style="margin-top: 200px;font-family: 'Mulish', sans-serif;text-shadow: 10px 15px 20px black;"><h1>Welcome to The Victoria</h1></div>
  <a class="btn" href="#Welcome">More about us</a>
</div>

  <!-- welcome!! -->
  <div class="jumbotron" id="Welcome">
  <div class="sections_group" style="padding-top:30px;" >

    <table>
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
        <td style="font-family: 'Mulish', sans-serif;">
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
  <h6 class="prob_desc text-center mb-3">Here in Victoria we not only provide Room facilities but also some In-Hotel Amenities such as Spa, Gym etc.Enjoy While you stay!!</h6>
  </div>
<div class="container-fluid cards body-custom">
  <div class="row mx-auto row_cards">
    <div class="col-10 mx-auto">
      <div class="row myrow pb-4">
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center">
          <div class="card my-2 mycard h-100" style="width: 18rem;">
            <img src="https://img4.nbstatic.in/tr:w-500/577b59244cedfd000e025075.jpg" class="card-img-top myimg"
              alt="..." />
            <div class="card-body">
            <h4 class="text-center">SPA</h4>
              <p class="card-text card_p">
              A day spa is a business that provides a variety of services for the purpose of improving health, beauty and relaxation through personal care treatments such as hair, massages and facials
              </p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard h-100" style="width: 18rem;">
            <img src="https://images.theconversation.com/files/339674/original/file-20200604-130929-iutdtd.jpg?ixlib=rb-1.1.0&rect=8%2C0%2C5455%2C3637&q=45&auto=format&w=496&fit=clip"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
            <h4 class="text-center">GYM</h4>
              <p class="card-text card_p">
              A gym is a club, building, or large room, usually containing special equipment, where people go to do physical exercise and get fit.</p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard h-100" style="width: 18rem;">
            <img
              src="https://i.pinimg.com/originals/8c/ab/a6/8caba665dff3a3f5479fa6da97b0c321.jpg"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
            <h4 class="text-center">Home Theater</h4>
              <p class="card-text card_p">
              Here in The Victoria, we have the best Home Theater System with comfortable recliner chairs to enjoy your favourite movie at anytime you want.
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
          <div class="card my-2 mycard h-100" style="width: 18rem;">
            <img
              src="https://media-cdn.tripadvisor.com/media/photo-s/0b/21/96/69/video-gaming-room.jpg"
              class="card-img-top myimg " alt="..." />
            <div class="card-body">
            <h4 class="text-center">Gaming Room</h4>
              <p class="card-text card_p">
              An evening full of games is not meant just for the kids. With pool, pingpong, darts and more, there are plenty of activities to keep all ages entertained.
              </p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard h-100" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFhrR3ek--h7m6N4pCd2rwffmUkJ8HxJ2rKw&usqp=CAU"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
            <h4 class="text-center">Swimming Pool</h4>
              <p class="card-text card_p">After a long day of traveling or sightseeing, there’s nothing like a refreshing dip in the pool. If you’re looking to make a splash on your next vacation, we’ve rounded up the most exquisite pool in our Hotel</p>
            </div>
          </div>
        </div>
        <div className="col-md-4 col-sm-6 col-12 d-flex justify-content-center ml-3 mr-3">
          <div class="card my-2 mycard p-3 mb-5 bg-white rounded h-100" style="width: 18rem;">
            <img src="https://media-magazine.trivago.com/wp-content/uploads/2020/03/14091937/m-hotel-jacuzzi-champagne.jpg"
              class="card-img-top myimg" alt="..." />
            <div class="card-body">
            <h4 class="text-center">Jacuzzi</h4>
              <p class="card-text card_p">
              A hotel room with an in-room jacuzzi or hot tub is the ultimate in romantic luxury. These are some of the best for your next trip in 2021.
              </p>
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
