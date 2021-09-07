<?php
$header="Make My Travel Plan";
$page=chop(basename($_SERVER['PHP_SELF']),".php");
$menu="<nav class='navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light' id='ftco-navbar'>
	    <div class='container'>
	       <a class='navbar-brand' href='index.php'><image src='images\\finalone.png'></a>
	      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#ftco-nav' aria-controls='ftco-nav' aria-expanded='false' aria-label='Toggle navigation'>
	        <span class='oi oi-menu'></span> Menu
	      </button>

	      <div class='collapse navbar-collapse' id='ftco-nav'>
	        <ul class='navbar-nav ml-auto'>
	          <li class='nav-item'><a href='index.php' class='nav-link'>Home</a></li>
	          <li class='nav-item'><a href='index.php#about' class='nav-link'>About</a></li>
              <li class='nav-item'><a href='index.php#domestic' class='nav-link'>Domestic Tour</a>
			   <ul class='sub-menu'>
			   <li><a href='kashmir.php'>Kashmir</a></li>
			   <li><a href='rajsthan.php'>Rajsthan</a></li>
			   <li><a href='himachal.php'>Himalaya</a></li>
			   <li><a href='uttarakhandp.php'>Uttarakhand</a></li>
			   <li><a href='arunachalpradesh.php'>Arunachal</a></li>
			   <li><a href='odisha.php'>Odisha</a></li>
			   <li><a href='sikkim.php'>Sikkim</a></li>
			   <li><a href='southindia.php'>South India</a></li>
			   <li><a href='andman.php'>Andman-Nicobar</a></li>
			      </ul>
			   </li>
                <li class='nav-item'><a href='index.php#international' class='nav-link'>International Tour</a>
			   <ul class='sub-menu'>
			   <li><a href='dubai.php'>Dubai</a></li>
			   <li><a href='europe.php'>Europe</a></li>
			   <li><a href='singapore.php'>Singapore</a></li>
			   <li><a href='malaysia.php'>Malaysia</a></li>
			   <li><a href='thailand.php'>Thailand</a></li>
			   <li><a href='bishkek.php'>Bishkek</a></li>
			    </ul>
			   </li>			  				   
			  <li class='nav-item'><a href='#' class='nav-link'>Packages</a>
			   <ul class='sub-menu'>
			     <li><a href='#'>Honeymoon</a></li>
			        <li><a href='#'>Sightseen</a></li>
			    </ul>
			  </li>
	          <li class='nav-item'><a href='#' class='nav-link'>Hotels</a></li>
	          <li class='nav-item'><a href='#' class='nav-link'>Blog</a></li>
	          <li class='nav-item'><a href='contact.php' class='nav-link'>Contact</a></li>
	        </ul>
	    </div>
	    </div>
	  </nav>";
	 $cont="<div class='col-lg-3 sidebar'>
        		<div class='sidebar-wrap ftco-animate'>
        			<h2 class='heading mb-4'>Book Now</h2>
          			<div class='fields'>
          				<div class='row'>
						 <form action='email.php' method='post'>
          					<div class='col-md-12'>
				              <div class='form-group'>
				                <input type='text' class='form-control' name='name' placeholder='Name'>
				              </div>
			              </div>
			              <div class='col-md-12'>
				              <div class='form-group'>
				                <input type='text' class='form-control' name='email' placeholder='Email'>
				                <input type='hidden' name='page' value='$page'>
				              </div>
			              </div>
			           <div class='col-md-12'>
				              <div class='form-group'>
				                <input type='text' class='form-control' name='contact' placeholder='Contact Number'>
				              </div>
			           </div>
			              <div class='col-md-12'>
				              <div class='form-group'>
				                <input type='text' class='form-control checkin_date' name='datefrm' placeholder='Date from'>
				              </div>
			              </div>
			                <div class='col-md-12'>
				              <div class='form-group'>
				                <input type='text' class='form-control checkout_date' name='dateto' placeholder='Date to'>
				              </div>
				            </div>
				            <div class='col-md-12'>
					            <div class='form-group'>
				                <div class='select-wrap one-third'>
			                    <div class='icon'><span class='ion-ios-arrow-down'></span></div>
			                    <select name='guests' id='' class='form-control' placeholder='Guest'>
			                      <option value='0'>Guests</option>
			                      <option value='1'>1</option>
			                      <option value='2'>2</option>
			                      <option value='3'>3</option>
			                      <option value='4'>4</option>
								  <option value='5'>5</option>
								  <option value='6'>6</option>
								  <option value='7'>7</option>
								  <option value='8'>8</option>
								  <option value='9'>9</option>
								  <option value='10'>10</option>
								  <option value='11'>Morethan 10</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
			              <div class='col-md-12'>
					            <div class='form-group'>
				                <div class='select-wrap one-third'>
			                    <div class='icon'><span class='ion-ios-arrow-down'></span></div>
			                    <select name='child' id='' class='form-control' placeholder='Children'>
			                      <option value='0'>Childrens</option>
			                      <option value='1'>1</option>
			                      <option value='2'>2</option>
			                      <option value='3'>3</option>
			                      <option value='4'>4</option>
			                      <option value='5'>More</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
				            <div class='col-md-12'>
				              <div class='form-group'>
				                <input type='submit' value='Book Now' class='btn btn-primary py-3'>
				              </div>
			              </div>
					</div>
        		</div>
			</form>
                ";
	  
	  $bottom="<ul>
	                <li><span class='icon icon-map-marker'></span><span class='text'>Make My Travel Plan</span></li>
					<li><span class='icon icon-map-marker'></span><span class='text'>116-A/1,Near Moon Place Hote, New Bus Stand Pali(Rajsthan)</span></li>
	                <li><a href='#'><span class='icon icon-phone'></span><span class='text'>029-32231877</span></a></li>
	                <li><a href='#'><span class='icon icon-envelope'></span><span class='text'>&nbsp;sales@makemytravelplan.com</span></a></li>
	                 <li><a href='#'><span class='icon icon-envelope'></span><span class='text'>&nbsp;parkash@makemytravelplan.com</span></a></li>
	              </ul>";
?>