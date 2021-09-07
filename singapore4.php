<?php
include "nec.php";
include "sing.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$header;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/animate.css">
    
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/magnific-popup.css">

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/destination.css">
  </head>
  <body>
    <?php echo $menu;?>
	 
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/sing6.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Singapore</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Singapore Tour</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	    <?=$cont?>
					<div class="sidebar-wrap ftco-animate">
						<h3 class="heading mb-4"><b>Rs.34,999/-</b></h3>
					<div>
				</div>
			</div>
          </div>
		</div>  
          <div class="col-lg-9">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/sing2.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/sing6.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="hotel-img" style="background-image: url(images/sing4.jpg);"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
          		 <?=$sing4;?>
	    						
    						</div>
    				  </div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Take A Tour</h4>
          			<div class="block-16">
		              <figure>
		                <img src="images/hotel-6.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
          	          	
          		<!--div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Packages</h4>
          			<div class="row">
          				<div class="col-md-4">
				    				<div class="destination">
				    					<a href="dubai2.html" class="img img-2" style="background-image: url(images/dub1.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="dubai2.html">3*Delux Hotel Dubai Tour</a></h3>
						    						<p class="rate">
						    						  <span id="day">4 Days</span>
											             <span id="night">/3 Nights</span>	
													</p>	 
												</div>				   
						    						
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">Rs.18,999/</span>
				    							</div>
				    						</div>
				    						<p>3*Delux Hotel Dubai Tour</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Dubai</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-2.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
						    						
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">$40<br><small>/night</small></span>
				    							</div>
				    						</div>
				    						<p>Far far away, behind the word mountains, far from the countries</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hotel-single.html" class="img img-2" style="background-image: url(images/hotel-3.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 Rating</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">$40<br><small>/night</small></span>
				    							</div>
				    						</div>
				    						<p>Far far away, behind the word mountains, far from the countries</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
          			</div>
          		</div>

          	</div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
				<div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?=$header?></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Online enquiry</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
                <li><a href="#" class="py-2 d-block">General enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Experience</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Beach</a></li>
                <li><a href="#" class="py-2 d-block">Adventure</a></li>
                <li><a href="#" class="py-2 d-block">Wildlife</a></li>
                <li><a href="#" class="py-2 d-block">Honeymoon</a></li>
                <li><a href="#" class="py-2 d-block">Nature</a></li>
                <li><a href="#" class="py-2 d-block">Party</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <?=$bottom;?>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
  </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>