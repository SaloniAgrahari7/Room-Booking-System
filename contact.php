<?php
include('db.php');
?>
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
      </div>-->
 <section class ="my-5">
    <div class="py-5">

        <h2 class="text-center"> Contact US </h2><br>
        <div class="center">
			<p class="center"><strong>Phone :</strong>+977 9811331047</p>
			<p class="center"><strong>Email :</strong> <a href="+977 9811331047">Mailing Address </Address></a></p>
			<p class="center"><strong>Address :</strong> Janpath Tole,Biratnagar</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<!-- <ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul> -->
			
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1786.0861250417956!2d87.2756565010657!3d26.450176071406013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744fa9dda41b%3A0x90dfbd990b19634a!2sShree%20Krishna%20Party%20Palace%20Hotel%20%26%20Lodge!5e0!3m2!1sen!2snp!4v1659250740220!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
      </div>
<div class="container">
  <form action="msg.php" method="post">
    <h3> Leave your Message </h3>
    <div class="form-group">
      <label> Your name </label>
      <input type="text" name="fullname" id="fullname" autocomplete="off" class="form-control">
</div>
      <div class="form-group">
      <label> phone </label>
      <input type="phone" name="phoneno" maxlength="10" pattern="[0-9]*"id="phoneno" minlength="10" autocomplete="off" class="form-control">
</div>
      <div class="form-group">
      <label> Subject </label>
      <input type="text" name="subject"  id="subject"  autocomplete="off" class="form-control">
</div>
      <div class="form-group">
      <label> Message </label>
      <textarea class="form-control" id="message"  name="message">
</textarea>
</div>
<div>
   <!-- <textarea class="mydiv hidden" name="cdate" >  -->



<button type ="submit" class="btn btn-success" name="sub" id="sub">Submit</button>

</form>
<?php



				/* if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$subject = $_POST['subject'];
					$email = $_POST['phone'];
          $message = $_POST['message'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `subject`, `phone`,`message`,`cdate`,`approval`) VALUES ('$name','$subject','$email',$message,now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}*/
				?>
</div>


</section> 

<!-- <section class="contact-w3ls" id="contact">
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
      <div class="contact-agileits">
        <h2 class="text-center"> Contact US </h2><br>
        <form action="userinfo.php" method="post">
        
          <div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>  
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
              <p class="help-block"></p>
            
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
              <p class="help-block"></p>
            
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary"> 
        </form>
        <?php
        if(isset($_POST['sub']))
        {
          $name =$_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $approval = "Not Allowed";
          $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
          
          
          if(mysqli_query($con,$sql))
          echo"OK";
          
        }
        ?>
      </div>
    </div> --> 
    <!-- <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
      <h4>Connect With Us</h4>
      <p class="contact-agile1"><strong>Phone :</strong>+94 (65)222-44-55</p>
      <p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@SUNRISE.COM</a></p>
      <p class="contact-agile1"><strong>Address :</strong> New Kalmunai Road, Batticaloa, Sri Lanka</p>
                                
      <div class="social-bnr-agileits footer-icons-agileinfo">
        <ul class="social-icons3">
                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                
              </ul>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662" ></iframe>
    </div>
    <div class="clearfix"></div>
  </div> -->
</section>
<!-- /contact -->
      
<!--/footer -->
      

<br>
  <br><br>


  <?php require('inc/footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


  </body>
  </html>
