<!doctype html>
<html class="no-js" lang="en">
    <head>
	<link rel="icon" type="image/x-icon" href="img/neuron-favicon.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <style>
    #more_treat{
		color: white;
    /* margin-left: 431px; */
	}
	@media only screen and (max-width: 600px) {
	    div.carousel-caption
	    {
	        /* margin-top: 80px; */
	        display: none;
	    }
	}
	@media (min-width: 767px) {
        .mobile-container {
          display: none;
        }
      }
	@media only screen and (min-width: 360px) and (max-width: 767px)  {
		#more_treat
		{
			margin-left: 60px;
		}
		div.carousel-caption
	    {
	        /*margin-top: 80px;*/
	        display: none;
	    }
	}
    .faq {
	padding: 60px 0;
	
  }
.faq .faq-list {
	padding: 0;
	list-style: none;
  }
.faq .faq-list li {
	  background-color: white;
	  margin-bottom: 10px;
	  border-radius: 10px;
	  padding: 10px 40px;
  }
.faq .faq-list a {
	  display: block;
	  position: relative;
	  font-size: 16px;
	  font-weight: 600;
	  color: #333333;
	  text-decoration: none;
  }
  
.faq .faq-list i {
	font-size: 16px;
	position: absolute;
	left: -25px;
	top: 6px;
	transition: 1s;
  }
.faq-title {
	  text-align: center;
	  font-size: 17px;
	  border-bottom: 2px dashed #ffffff;
	  margin-bottom: 30px;
	  padding-bottom: 10px;
	  color: #ffffff;
  }
  
.faq .faq-list p {
	padding-top: 5px;
	margin-bottom: 20px;
	font-size: 15px;
  }

.collapsed i.fa.fa-arrow-up {
	  transform: rotate(180deg);
  }
       
  <!--testimonial-->        
        #testimonial
		{
			margin-top: 30px;
            margin-bottom: 31px;
		}
		.testimonials-wrap {
			padding: 40px 0;
		}
		.heading-section {
			text-align: center;
		}
		.sub-heading {
			font-family: 'Lato', sans-serif;
		    font-size: 12px;
		    display: block;
		    font-weight: 600;
		    color: #2e9ca1;
		    text-transform: uppercase;
		    letter-spacing: 2px;
		}
		.heading-section h2 {
			font-size: 28px;
		    font-weight: 600;
		    padding-top: 10px;
		    padding-bottom: 15px;
		}
		.testimonial-box {
		
			height: 477px;
		    display: block;
		    position: relative;
		    /* padding: 30px 20px; */
		    background: #fff;
		    border: 1px solid rgba(0,0,0,.03);
		    border-radius: 5px;
		    box-shadow: 0 0 20px rgba(0, 0, 0, .08);
		}
		.tstmonial_p
		{
	font-family: monospace;
	
		}
		.user-img {
		    width: 80px;
		    height: 80px;
		    border-radius: 50%;
		    position: relative;
			min-width: 80px;
			background-size: 100%;
		}
		.carousel-testimonial .item {
			padding: 30px 10px;
			background-color: #fff;
		}
		.quote {
			position: absolute;
		    top: -12px;
		    color: #2e9da1;
		    font-size: 27px;
		}
		.name {
			margin-bottom: 0;
		    line-height: 14px;
		    font-size: 17px;
		    font-weight: 500;
		}
		.position {
			color: #adadad;
			font-size: 14px;
		}
		.carousel-testimonial .owl-nav {
			text-align: center;
		}
		.carousel-testimonial .owl-nav button.owl-next, 
		.carousel-testimonial .owl-nav button.owl-prev {
		    padding: 0 12px !important;
		}
		.carousel-testimonial .owl-nav button {
			outline: none;
			padding: 0;
		}
		.carousel-testimonial .owl-nav button.owl-next span, 
		.carousel-testimonial .owl-nav button.owl-prev span {
			display: block;
		    font-size: 40px;
		    width: 25px;
		    height: 25px;
		    vertical-align: 0px;
		    line-height: 16px;
		}
		.carousel-testimonial .owl-nav button.owl-next.disabled, 
		.carousel-testimonial .owl-nav button.owl-prev.disabled {
			opacity: 0.5;
		}   
		
		/* Image slider */
		* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  /* bottom: 8px; */
  width: 100%;
  text-align: justify;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.slider-width
{
	min-width: 100%;
}
       </style> 
	   <meta name="google-site-verification" content="Vd76BE2zsZe1q08_D4WoAuawHkyZXn6eVCHeo_R2H8Q" />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
	 <?php include('includes/script.php'); ?>
		 <?php include('includes/header.php'); ?><br>

		 <!-- slider area -->
		 <div class="slideshow-container slider-width">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <!-- <div class="w-100"> -->
  <img src="img/Banner-1.jpg" style="width:100%">
  <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption d-none d-md-block">
                        <h4><span>Neuron Pain & Spine Clinic </span> Medical is One of The  <span>Best Pain Clinics in India</span></h4>
									<p> <span style="font-weight:bold">Helping patients</span> by providing the latest <span style="font-weight:bold">non-surgical pain treatment</span> services in India. </p>
									<div class="button d-flex"><br>
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="contact.php" class="btn primary ml-2">Learn More</a>
									</div>
                    </div>
  <!-- <div class="text">Caption Text</div> -->
<!-- </div> -->
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  <img src="img/slider2.jpg" style="width:100%">
  <div class="carousel-caption d-none d-md-block" style="margin-bottom:80px;">
                        <h1>Why Choose <span>NPSC?</span></h1>
									<p>
									<ul>
                                     <li style="color:black;">- We have specialist doctors trained in USA & Canada</li>
									 <li style="color:black;">- Equipped with the latest technology</li>
									 <li style="color:black;">- Availability of Ultrasound'</li>
									 <li style="color:black;">- Forefront in Skills, Knowledge & Innovation</li>
									</ul><br>	
									<div class="button">
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="about.php" class="btn primary">About Us</a>
									</div>
                    </div>
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides">
  <!-- <div class="numbertext">3 / 3</div> -->
  <img src="img/Banner-2.jpg" style="width:100%">
  <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption d-none d-md-block">
                        <h3 style="color:black;">Center of Excellence in Musculoskeletal Pain & Regenerative Therapy For Pain</h3>
									<p style="color:black;"> <b>We Offer The Best Pain Management Services to Improve Your Quality of Life & Help You Live a Joyous Life</b> </p>
									<div class="button d-flex"><br>
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="contact.php" class="btn primary ml-2">Conatct Now</a>
									</div>
                    </div>
  <!-- <div class="text">Caption Three</div> -->
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>



<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

		 
		 <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000">
          <div style="height:500px; display: block;" class="carousel-inner" style="width:100%; position:absolute;">
    <div class="carousel-item mobile screen active">
      <img class="d-block w-100" src="img/Banner-1.jpg" alt="..." class="slider" style="width:100%;">
      <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption">
                       <h4><span>Neuron Pain & Spine Clinic </span> Medical is One of The  <span>Best Pain Clinics in India</span></h4>
								<p> <span style="font-weight:bold">Helping patients</span> by providing the latest <span style="font-weight:bold">non-surgical pain treatment</span> services in India. </p>
									<div class="button"><br>
									<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
									<a href="contact.php" class="btn primary">Learn More</a>
								</div>
                 </div>
    </div>
    
    <div class="carousel-item mobile screen">
      <img class="d-block w-100" src="img/slider2.jpg" alt="..." style="width:100%;">
      <div class="carousel-caption" style="margin-bottom:80px;">
                     <h1>Why Choose <span>NPSC?</span></h1>
									<p>
									<ul>
                                    <li style="color:black;">- We have specialist doctors trained in USA & Canada</li>
									 <li style="color:black;">- Equipped with the latest technology</li>
									 <li style="color:black;">- Availability of Ultrasound'</li>
									 <li style="color:black;">- Forefront in Skills, Knowledge & Innovation</li>
									</ul><br>	
									<div class="button">
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="about.php" class="btn primary">About Us</a>
									</div>
                   </div>
    </div>
    <div class="carousel-item mobile screen">
      <img class="d-block w-100" src="img/Banner-2.jpg" alt="..." style="width:100%;">
      <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption">
                        <h3 style="color:black;">Center of Excellence in Musculoskeletal Pain & Regenerative Therapy For Pain</h3>
									<p style="color:black;"> <b>We Offer The Best Pain Management Services to Improve Your Quality of Life & Help You Live a Joyous Life</b> </p>
									<div class="button"><br>
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="contact.php" class="btn primary">Conatct Now</a>
									</div>
                    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
		
		<!-- Slider Area  -->
		<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="2000" style="width:100%;margin-top:20px">
         <div style="height:500px; display: block;" class="carousel-inner" style="width:100%; position:absolute;">
             <div class="carousel-item mobile screen active" style="width:100%;">
               <img src="img/Banner-1.jpg" alt="..." class="slider" style="width:100%;">
                   <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption d-none d-md-block">
                       <h4><span>Neuron Pain & Spine Clinic </span> Medical is One of The  <span>Best Pain Clinics in India</span></h4>
									<p> <span style="font-weight:bold">Helping patients</span> by providing the latest <span style="font-weight:bold">non-surgical pain treatment</span> services in India. </p>
									<div class="button"><br>
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="contact.php" class="btn primary">Learn More</a>
									</div>
                   </div>
           </div>
            
           <div class="carousel-item mobile screen" style="width:100%">
               <img src="img/slider2.jpg" alt="..." style="width:100%;">
                   <div class="carousel-caption d-none d-md-block" style="margin-bottom:80px;">
                       <h1>Why Choose <span>NPSC?</span></h1>
									<p>
									<ul>
                                    <li style="color:black;">- We have specialist doctors trained in USA & Canada</li>
									 <li style="color:black;">- Equipped with the latest technology</li>
									 <li style="color:black;">- Availability of Ultrasound'</li>
									 <li style="color:black;">- Forefront in Skills, Knowledge & Innovation</li>
									</ul><br>	
									<div class="button">
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="about.php" class="btn primary">About Us</a>
									</div>
                   </div>
           </div>
            
           <div class="carousel-item mobile screen" style="width:100%">
               <img src="img/Banner-2.jpg" alt="..." style="width:100%;">
                   <div style="margin-right:40%;margin-bottom:80px;" class="carousel-caption d-none d-md-block">
                       <h3 style="color:black;">Center of Excellence in Musculoskeletal Pain & Regenerative Therapy For Pain</h3>
									<p style="color:black;"> <b>We Offer The Best Pain Management Services to Improve Your Quality of Life & Help You Live a Joyous Life</b> </p>
									<div class="button"><br>
										<a href="https://api.whatsapp.com/send?phone=916371966229&text=Hello%2C%20I%20want%20to%20Book%20an%20Appointment%20with%20%20Dr%20Rajendra%20Sahoo" class="btn">Get Appointment</a>
										<a href="contact.php" class="btn primary">Conatct Now</a>
									</div>
                   </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div> -->
		
		<!-- End Single Slider -->
			</div>
		</section>
		 <!-- End Slider Area -->
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="margin-top:-20px;">
							<h2>The best pain Management Center in India</h2>
							<img src="img/section-img.png" alt="#">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3 style="text-transform:uppercase">Welcome to Neuron Pain & Spine Clinic</h3>
							<p>Neuron Pain & Spine Clinic is the most advanced pain clinic in Odisha for non-surgical treatment of 
chronic pain conditions including spinal pain, joint pain, nerve pain, headaches, facial pain, 
musculoskeletal pain and cancer pain. It is one of the best pain management centers in India. We are 
offering the best and latest treatment modalities as per the global best practice guidelines.  </p>						
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Low Back Pain. </li>
										<li><i class="fa fa-caret-right"></i>Joint / Arthritis pains .</li>
										<li><i class="fa fa-caret-right"></i>Neuropathic Pain Conditions.</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
										<li><i class="fa fa-caret-right"></i>Sports Injuries. </li>
										<li><i class="fa fa-caret-right"></i>Cancer Pain.</li>
										<li><i class="fa fa-caret-right"></i>Cervical Headache.</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="chose-right">
							<div class="video-image">
								<!-- <div class="embed-responsive embed-responsive-16by9"> -->
									<div>
  <iframe class="embed-responsive-item" width="600px" height="315px" src="https://www.youtube.com/embed/76sja7GGzMg" allowfullscreen></iframe>
</div>
								</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		
		
		<!-- Start service -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>PAIN CONDITIONS WE TREAT</h2>
							<img src="img/section-img.png" alt="#">
						</div>
						
					</div>
				</div>
				<div class="row" style="margin-top:-80px;">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Back-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Low Back Pain</h5>
                </div>

						<!-- 

							<i class="icofont icofont-prescription"></i>
							<img src="img/icon/Back -Pain.png" height="25px" width="25px" ></img>
							<h4><a href="service-details.html">Low Back Pain</a></h4> -->	
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Spondylosis.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Spondylosis</h5>
                </div>			
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Neck-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Neck Pain</h5>
                </div>	

							<!-- <i class="icofont icofont-heart-alt"></i>
							<h4><a href="service-details.html">Neck Pain</a></h4> -->
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Shoulder-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Shoulder Pain</h5>
                </div>	
							
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/SCiatica-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Sciatica Pain</h5>
                        </div>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Knee-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Knee or Joint Arthritis</h5>
                        </div>
							
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Foot -Ankle-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Foot or Ankle Pain</h5>
                        </div>
							
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Neuropathic-Pain.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Neuropathic Pain</h5>
                        </div>
						
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Headache.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Headaches & Migraines</h5>
                        </div>
							
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Trigeminal-Neuralgia.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Trigeminal Neuralgia</h5>
                        </div>
						
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Fibromyalgia.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Fibromyalgia</h5>
                        </div>
						
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
						<img class="container_image" src="img/icon/Complex-regional-pain-syndrome.png" />
                 <div class="container_text" style="display:inline;">
                 <h5>Complex Regional Pain syndrome</h5>
                        </div>
							
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-md-12 text-center">
						<a href="condition-we-treat.php" id="more_treat" class="btn">Find More Treatments&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i></a>
  					</div>
				</div>
			</div>
		</section>
		<!--/ End service -->

		<!-- Start Call to action -->
		<section class="call-action" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2 style="color:black;text-shadow: 3px 2px #ffffff">Feel Free to Consult with our Pain Specialists!</h2>
							<p></p>
							<div class="button">
								<a href="#" class="btn">BOOK AN APPOINTMENT</a>
							
								<a href="https://conferkare.com/" class="btn ">Video Consultation<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
	
		
		
		<!-- Start Call to action -->
		<!-- <section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Feel Free to Consult with our Pain Specialists!</h2>
							<p></p>-->
							<!-- <div class="button">
								<a href="#" class="btn">BOOK AN APPOINTMENT</a>
								<a href="#" class="btn second">cONTACT uS<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --> 
		<!--/ End Call to action -->
		<!-- Start Appointment -->
		<section class="appointment" style="margin-top:-40px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You. Book An Appointment</h2>
							<img src="img/section-img.png" alt="#">
							<p>Get Rid of All Your Pain Concerns</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 col-12">
						<form class="form" action="#">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="name" type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="email" type="email" placeholder="Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input name="phone" type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Department</li>
												<li data-value="2" class="option">Cardiac Clinic</li>
												<li data-value="3" class="option">Neurology</li>
												<li data-value="4" class="option">Dentistry</li>
												<li data-value="5" class="option">Gastroenterology</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
											<ul class="list">
												<li data-value="1" class="option selected ">Doctor</li>
												<li data-value="2" class="option">Dr. Amiya</li>
												<li data-value="3" class="option">Dr. Rajsekhar</li>
												<li data-value="4" class="option">Dr. Alka sen</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<input type="text" placeholder="Date" id="datepicker">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<textarea name="message" placeholder="Write Your Message Here....."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="submit" class="btn">Book An Appointment</button>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-8 col-12">
									<p>(We will be confirm by an Text Message)</p>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-6 col-md-12 ">
						<div class="appointment-image">
							<img src="img/contact-img.png" alt="#">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment -->
<section class="faq" id="faqsection" style="background:#5041aa">
      <div class="container">
        <div class="faq-title">
          <h2 style="color:white;">Frequently Asked Questions</h2>
        </div>
        <ul class="faq-list">
          <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
            <a data-toggle="collapse" class="collapsed" href="#faq1" aria-expanded="false">What is Pain Management or Pain Clinic? <i class="fa fa-arrow-up"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
			  Advances in modern medicine has increased our life expectancies but at the same time has put 
           us at increasing risk for the development of Chronic pain secondary to trauma, cancer and 
          age-related wear and tear of spine and joints. Severe chronic pain is now a huge medical, 
          economic and social burden. Pain management also called “Pain medicine” is a new 
            super-specialty of modern medicine using a comprehensive approach for relieving the suffering 
           and improving the quality of life of those who living with long standing pain from various causes. 
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
            <a data-toggle="collapse" href="#faq2" class="collapsed">What is Interventional Pain Management?  <i class="fa fa-arrow-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
			  Interventional Pain management is another technique in the specialty of “Pain Medicine” where 
            imaging-guided (either X-ray, ultrasound or CT scan) percutaneous injections or procedures are 
            carried out to diagnose or deliver pain-relieving medicine to specific areas of your body. These 
            are also performed in the joints and the discs between the spine bones which can help us avoid 
            spine surgeries in most patients. Interventional pain management also involves complex and 
             advanced procedures like “Radiofrequency ablation, sympathetic blocks/neurolysis, 
             vertebroplasty/kyphoplasty, intrathecal drug delivery system and spinal cord stimulation. 
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
            <a data-toggle="collapse" href="#faq3" class="collapsed">What Kind of Pain conditions are treated in the Pain Clinic?  <i class="fa fa-arrow-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
			  Different types of chronic pain problems are treated, but the most common are lower back 
pain, sciatica, neck pain, joint pain, arthritis, headaches, neuralgic pain, spondylosis, foot or 
ankle pain, shoulder pain, knee arthritis, trigeminal neuralgia, fibromyalgia, migraine, cancer 
pain, complex regional pain syndromes, nerve-related pain, and persistent post-surgical pain. 
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Are these treatments successful? <i class="fa fa-arrow-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
			  The long-term success rates in majority of cases are excellent. Treatments can be very effective 
when performed early and in expert hands. After the intervention, the patient is put through a 
rehabilitation program that includes relaxation techniques, home-based exercises and lifestyle 
modifications. 
              </p>
            </div>
          </li>

         
        </ul>
      </div>
    </section><br>
	<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">15</span>
								<p>Years of Experience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">4000</span>
								<p>Happy Patients</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">5</span>
								<p>Awards</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">3000</span>
								<p>Interventional Pain Management Procedures</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->


	<section id="testimonial">
	<div class="testimonials-wrap">
	<div class="container">
        <div class="heading-section">
            <span class="sub-heading">Testimonials</span>
            <h2> NEURON PAIN & SPINE CLINIC</h2>
        </div>
        <div class="carousel-testimonial owl-carousel">
		<div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I was suffering from long-standing back pain for which I had consulted all renowned neurologists at Cuttack and Bhubaneswar, but pain was persisting. Then I was referred to the best pain doctor Dr Rajendra Sahoo sir at Bhubaneswar. He took an MRI and explained me what exactly is the cause of pain. At first, he gave me a tablet and the first dose made the miracle. Then, few days later he gave me an injection at my disc level and since then the pain has almost gone.
                        </p>
                        <br>
						<p class="name">Sunanda Kumar Debata, Cuttack</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I have been suffering from right side shoulder pain for 3-4 months and was seeing a neurologist who later told me to consult Dr Rajendra Sahoo. I have taken a consultation with Dr Sahoo and he used ultrasound to scan my shoulder and immediately he told me that it is “Frozen Shoulder”. Then, with ultrasound guidance, he did shoulder joint injection. I realized that Dr Sahoo is skilled and very knowledgeable pain doctor in Odisha. Subsequently, with physiotherapy my shoulder range of pain has improved significantly.
                        </p>
                        <br>
						<p class="name">Savitri Soren, Khorda</p>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I was suffering severe back pain and was not able to walk or sleep properly. I had seen few doctors and they said it is disc problem and suggested me spine operation. Then I came to know about Dr Rajendra Sahoo, Pain Specialist and visited him. He did a specialized “Spinal Injection”. Now, it has been more than a year and I can walk and do all my activities. Anyone with back pain or spondylitis, I suggest to see Rajendra sir at SimpleeKare or even at KIMS. 
                        </p>
                       <br>
						<p class="name">Aditya Kumar Das, Bhubaneswar</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">My wife Puspalata Swain was suffering from severe back pain. She was only dependent on a wheelchair. After consulting Dr Rajendra Sahoo twice, she is completely doing fine now. She can now walk well also.</p>
                       <br>
						<p class="name">Pratap Kumar Swain</p>
                    </div>
                </div>
            </div>
			<div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I was suffering from spondylitis back pain and the pain was stopping me from doing regular works. After someone’s recommendation, I visited Dr Rajendra Sahoo sir in his clinic. He explained me everything and later I underwent epidural injection in OT which completely changed my pain. I’m much relieved now and with the help of physio and medication, I’m doing well. Thanks to Rajendra sir and his treatment that I’m leading a happy life. Strongly suggest Rajendra sir for Pain problems.
                        </p>
                       <br>
						<p class="name">S. Das, Bhubaneswar</p>
                    </div>
                </div>
            </div>
			<div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">My wife was suffering from back pain for a long long time and we had seen many doctors but pain was persistent. After treatment with Rajendra sir she is much better and able to walk now which she was not able to do earlier. Many thanks Rajendra sir.
                        </p>
                       <br>
						<p class="name">Pratap Kumar Swain, Mayurbhanj</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I have been suffering from severe back pain for 10 years. I was depressed, was not able to do daily work. Life was horrible. But Rajendra sir made a big difference in my life. He initially gave me medicines which helped me greatly and later did a spinal injection for the purpose of back pain treatment. This injection was like a miracle. My pain vanished and I was happy after a long time and was sleeping happily also. I’m so much thankful to rajendrak sir for his treatment. 
                        </p>
                       <br>
						<p class="name">Kishor B, Nayagarh</p>
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">My wife has been suffering from breast cancer for which she had undergone surgery, and chemotherapy. Later the cancer spread to lungs, and it caused severe pain. Dr Rajendra Sahoo as a Pain Specialist helped her and our family immensely with his medicines and nerve block injections. she had a comfortable life toward the end of her life. He took extra efforts in arranging Morphine tablets for managing my wife’s pain. Specialized doctors for managing cancer pain are so essential, especially in advanced cancers.  
                        </p>
                       <br>
						<p class="name">Lata Rout, Kakatpur, Puri</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">My wife was suffering from abdominal pain for 3-4 years. I had consulted many doctors and despite all tests her cause of pain could not be diagnosed appropriately. Then, another doctor suggested me to see Dr Rajendra Sahoo at Bhubaneswar. He examined and made a diagnosis of nerve entrapment. Then, with ultrasound, he gave a nerve block that worked like a magic. But She was pain free for 2 weeks only. This was repeated twice. Subsequently, he suggested to do “radiofrequency ablation” of the nerve and then my wife is totally pain free now. 
                      </p>
                       <br>
						<p class="name">Siva Prasad Mishra, NALCO Angul</p>
                    </div>
                </div>
            </div>
           <div class="item">
                <div class="testimonial-box d-flex">
                   
                    <div class="text pl-4">
                        <span class="quote"><i class="fa fa-quote-left"></i></span>
                        <p class="tstmonial_p">I’m an unfortunate patient with pancreas problem known chronic pancreatitis which causes severe abdomen pain for last 7-8 years. I wasn’t even eat for few days because of pain. I had undergone 2 pancreas operation, but pain persisted. Then, the surgeon referred me to Rajendra sir. He did an injection therapy called as radiofrequency ablation in my back and since then I’m magically relieved of my pain. This is really unbelievable. I’m very thankful to sir for his innovative treatment. </p>
                       <br>
						<p class="name">Mukesh Rout, Nayagarh</p>
                    </div>
                </div>
            </div>   
        </div>
	</div>
</div>
	</section id="testimonial">


		 <?php include('includes/footer.php'); ?>
		  <?php include('includes/footer_script.php'); ?>
    <script>

$('.carousel-testimonial').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:false,
            loop:true
        }
		
    }
})
		</script>
		<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

    </body>
</html>