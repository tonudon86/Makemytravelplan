<?php
include "nec.php";
$title=$header;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
       
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/singapore.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Singapore</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Singapore Package</h1>
          </div>
        </div>
      </div>
    </div>
	  <section class="ftco-section">
      <div class="container">
        <div class="row">
        	<!--div class="col-lg-3 sidebar order-md-last ftco-animate">
        		<!--div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Destination, City">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select Location</option>
	                      <option value="">San Francisco USA</option>
	                      <option value="">Berlin Germany</option>
	                      <option value="">Lodon United Kingdom</option>
	                      <option value="">Paris Italy</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkout_date" class="form-control checkout_date" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap ftco-animate">
        			<h3 class="heading mb-4">Star Rating</h3>
        			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div><!-- END-->
          <div class="col-lg-12">
          	<div class="row">
          		<div class="col-sm col-md-12 col-lg-4 ftco-animate">
				        <div class="destination">
		    					<a href="singapore1.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/sngpore.jpg);"> 								        
		    						<div class="icon d-flex justify-content-center align-items-center">
									     Learn More
		    						</div>
                                            <div class="up"> <h4>Singapore Tour</h4> 
											<span id="day">4 Days</span>
											<span id="night">3 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li>City Tour+Sentosa</li>
											<li>All Transfer & Sightseeing on SIC</li>
											<li>Pick & Drop From Singapore Airport</li>
										    </div>				   
								</a> 			    										
								
		    						
		    					</div>
		    				</div>
		    			<div class="col-sm col-md-12 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="singapore2.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/sing2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							Learn More
		    						</div>
									 <div class="up"> <h4>Singapore Tour</h4> 
											<span id="day">5 Days</span>
											<span id="night">4 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li> Sentosa+Universal+City Tour</li>
											<li>All Transfer & Sightseeing on SIC</li>
										     <li>Pick & Drop From Singapore Airport</li>
										    </div>		
		    					</a>
	
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-12 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="singapore3.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/sing3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							Learn More
		    						</div>
									<div class="up"> <h4>Singapore Tour</h4> 
											<span id="day">6 Days</span>
											<span id="night">5 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li>Sentosa+Universal+NightSafari+CityTour</li>
											<li>All Transfer & Sightseeing on SIC</li>
										    <li>Pick & Drop From Singapore Airport</li>
										    </div>		
		    					</a>
		    				</div>
		    			</div>
						<div class="col-sm col-md-12 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="singapore4.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/singcruise.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							Learn More
		    						</div>
									<div class="up"> <h4>Singapore Cruise Tour</h4> 
											<span id="day">6 Days</span>
											<span id="night">5 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li>Singapore City Tour+Sentosa+Cruise</li>
											<li>All Transfer & Sightseeing on SIC</li>
											<li>Pick & Drop From Singapore Airport</li>
										    </div>		
		    					</a>
		    				</div>
		    			</div>
						<div class="col-sm col-md-12 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="singapore5.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/sing4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							Learn More
		    						</div>
									<div class="up"> <h4>Singapore Bintan Tour</h4> 
											<span id="day">7 Days</span>
											<span id="night">6 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li>City Tour+Dhow Cruise+Desert Safari+Burj Khalifa</li>
											<li>All Transfer & Sightseeing on SIC</li>
											<li>Singapore VISA + OK To Board</li>
											<li>Pick & Drop From Singapore Airport</li>
										    </div>		
		    					</a>
		    				</div>
		    			</div>
						<div class="col-sm col-md-12 col-lg-4 ftco-animate">
		    				<div class="destination">
		    					<a href="singapore7.php" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/cruise.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							Learn More
		    						</div>
									<div class="up"> <h4>Singapore Cruise Tour</h4> 
											<span id="day">5 Days</span>
											<span id="night">6 Nights</span>
											<li>Daily Breakfast in Hotel</li>
											<li>Sentosa+Universal+NightSafari+CityTour+Bintan</li>
											<li>All Transfer & Sightseeing on SIC</li>
											<li>Pick & Drop From Singapore Airport</li>
										    </div>		
		    					</a>
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
              <h2 class="ftco-heading-2"></h2>
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
	              <?=$bottom;?>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to  can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
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