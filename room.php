<html>
   <head>
    <title>SKPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
   <?php require('inc/link.php');?>
      <link rel="stylesheet" type="text/css" href="/myproject/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
      
     <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
     
  </head>
  <body>

    <?php require('inc/header.php');?>

  <!--front image-->
  <div  id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/fronts.jpeg" class="d-block w-100">
      </div>
    </div>
  </div>

<!--check availability-
  <div class="container availability-form">
    <div class ="row" >
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-9">Check Booking Availability</h5>
        <form>
          <div class ="row align-items-end" >
            <div class="col-lg-3 mb-lg-3">
              <label class="form-label" style="font-weight:500">Check-In</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-lg-3">
                <label class="form-label" style="font-weight:500">Check-Out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-lg-3">
                  <label class="form-label" style="font-weight:500;">Adult</label>
                  <select class="form-select shadow-none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 mb-lg-3">
                  <label class="form-label" style="font-weight:500;">Children</label>
                  <select class="form-select shadow-none">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-1 mt-2 mb-lg-3">
                  <button type="button" class="btn btn-sm  btn-outline-dark custom-bg shadow-none" data-bs-toggle="modal">Submit</a></button>

                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    <!--OUR ROOMS-->


      <h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>

      <div class="container">
        <div class="row">

          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card">
                <img src="images\room1.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Superior
                     Room</h5>
                  <h6 class="mb-4" >₹1000 per night </h6>




                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="Admin\reservation.php" class="btn btn-sm btn-outline-dark text-dark custom-bg">Book Now</a>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\room2.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Deluxe Bedroom</h5>
                  <h6 class="mb-4" >₹2500 per night </h6>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="Admin\reservation.php" class="btn btn-sm btn-outline-dark text-dark custom-bg">Book Now</a>
                   
                  </div>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\singleroom.jpg" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title"> Guest House</h5>
                  <h6 class="mb-4" >₹800 per night </h6>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="Admin\reservation.php" class="btn btn-sm btn-outline-dark text-dark custom-bg">Book Now</a>
                    
                  </div>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\room_1.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Single Room</h5>
                  <h6 class="mb-4" >₹500 per night </h6>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="Admin\reservation.php" class="btn btn-sm btn-outline-dark text-dark custom-bg">Book Now</a>
                  
                  </div>

                </div>
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </div>
  </div>
  
  </div>
  </div>

<br>
  <br><br>


  <?php require('inc/footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


  </body>
  </html>
