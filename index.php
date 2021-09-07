<?php 
include "nec.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$header?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/animate.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jquery.transit.js"></script>

    
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/magnific-popup.css">

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="http://demo.c9infosol.com/puja/mod/css/style.css">
  </head>
  <body>
    <?php echo $menu;?>
	 
    <!-- END nav -->
	<!--domestic Honeymoon/-->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/banner-1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section justify-content-end ftco-search">
    	<div class="container-wrap ml-auto">
    		<div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Flight</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hotel</a>

              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Car Rent</a>
            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">From</label>
	              				<div class="form-field">
	              					<div class="icon"><span class="icon-my_location"></span></div>
					                <input type="text" class="form-control" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Travelers</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Guest</label>
              					<div class="form-field">
	              					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              	<form action="#" class="search-destination">
              		<div class="row">
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Where</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control" placeholder="Where">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check In</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkin_date" placeholder="Check In">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-items-end">
              				<div class="form-group">
              					<label for="#">Check Out</label>
              					<div class="form-field">
	              					<div class="icon"><span class="icon-map-marker"></span></div>
					                <input type="text" class="form-control checkout_date" placeholder="From">
					              </div>
				              </div>
              			</div>
              			<div class="col-md align-self-end">
              				<div class="form-group">
              					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
              			</div>
              		</div>
              	</form>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>01</span> Travel</h3>
    					<p>We offer a beutiful indelible travel experience to the travellers with our handpicked travel plans. </p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>02</span> Experience</h3>
    					<p>Experience the aromatic beuty of our itenaries alongwith long experienced travel guides. </p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>03</span> Relax</h3>
    					<p>Let Forget everything under the lap of nature.Rejuvenate yourself and get more to give your business and life. </p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4" id="international">See our latest International vacation destinations</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="dubai.php" class="destination-entry img" style="background-image: url(images/dubai.jpg);">
        			<div class="text text-center">
        				<h3>Dubai Tour</h3>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="europe.php" class="destination-entry img" style="background-image: url(images/europe.jpg);">
        			<div class="text text-center">
        				<h3>Europe Tour</h3>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="singapore.php" class="destination-entry img" style="background-image: url(images/singapore.jpg);">
        			<div class="text text-center">
        				<h3>Singapore Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="malaysia.php" class="destination-entry img" style="background-image: url(images/malaysia.jpg);">
        			<div class="text text-center">
        				<h3>Malaysia Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="process.php" class="destination-entry img" style="background-image: url(images/bali.jpg);">
        			<div class="text text-center">
        				<h3>Thailand Packages</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="process.php" class="destination-entry img" style="background-image: url(images/mauritus.jpg);">
        			<div class="text text-center">
        				<h3>Bishkek Tour</h3>
        			</div>
        		</a>
        	</div>
          </div>
    	</div>
    </section>
	<!------Vaccation2---------------------->
	 <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4" id="domestic">See our latest Domestic vacation destinations</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<a href="rajsthan.php" class="destination-entry img" style="background-image: url(images/rajsthan.jpg);">
        			<div class="text text-center">
        				<h3>Rajsthan Tour</h3>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="himachal.php" class="destination-entry img" style="background-image: url(images/himachal1.jpg);">
        			<div class="text text-center">
        				<h3>Himalayan Tour</h3>
        			</div>
        		</a>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<a href="kashmir.php" class="destination-entry img" style="background-image: url(images/kashmir1.jpg);">
        			<div class="text text-center">
        				<h3>Kashmir Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="uttarakhandp.php" class="destination-entry img" style="background-image: url(images/uk.jpg);">
        			<div class="text text-center">
        				<h3>Uttarakhand Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="southindia.php" class="destination-entry img" style="background-image: url(images/south.jpg);">
        			<div class="text text-center">
        				<h3>South India Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="process.php" class="destination-entry img" style="background-image: url(images/Sikkim.jpg);">
        			<div class="text text-center">
        				<h3>Sikkim Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="arunachalpradesh.php" class="destination-entry img" style="background-image: url(../images/ap.jpg);">
        			<div class="text text-center">
        				<h3>Arunachal Tour</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="process.php" class="destination-entry img" style="background-image: url(../images/andman.jpg);">
        			<div class="text text-center">
        				<h3>Andman-Nicobar</h3>
        			</div>
        		</a>
        	</div>
			<div class="col-md-4 ftco-animate">
        		<a href="odisha.php" class="destination-entry img" style="background-image: url(../images/odisha.jpg);">
        			<div class="text text-center">
        				<h3>Odisha Tour</h3>
        			</div>
        		</a>
        	</div>
          </div>
    	</div>
    </section>
	     
		<section class="ftco-about d-md-flex" id="about">
    	<div class="one-half img" style="background-image: url(../images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">About Us</h2>
        </div>
        <div>
  				<p>India is coreferent to conviction, Spirituality, and heart-stirring natural beauty and exotic locations have always fascinated tourists from all over the world. Make My Travel Plan is a dedicated home to provide a complete tour and travel management. Our hotels and holiday packages offers are the best in terms of rates and services. We are foremost Travel Agents specialize in custom made itineraries, charters and individual travelers on their own program. We have expertise in handling both domestic & international tourism. We have a team of professionals who has experience and complete knowledge of tourism in India. We have established a strong network of travel agents, franchises, transporters and hoteliers to make hassle-free arrangements for its customers. We are consistently involved in providing easy and reliable travel solutions and travel services. We always focused on customer satisfaction and security.
</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Special Activities</h3>
                <p> </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Travel Arrangements</h3>
                <p></p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Private Guide</h3>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Location Manager</h3>
                <p></p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Keep connected with us.</p>
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
              <h2 class="ftco-heading-2">Make My Travel Plans</h2>
              <p>We ensure a rejuvenating travel expereince which caters by our travel experts.</p>
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
                <li><a href="#about" class="py-2 d-block">About Us</a></li>
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
	             <?=$bottom?>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p></p>
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