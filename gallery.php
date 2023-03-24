<!doctype html>
<html>
    <head>
   
<style>


/* gallery slider*/
/* Slider */

@import url(https://fonts.googleapis.com/css?family=Istok+Web);
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
* {
  box-sizing: border-box;
}
body, figure { 
  margin: 0; background: #101010;
  font-family: Istok Web, sans-serif;
  font-weight: 100;
}
div#captioned-gallery { 
  width: 100%; overflow: hidden; 
}
figure.slider { 
  position: relative; width: 500%;
  font-size: 0; animation: 30s slidy infinite; 
}
figure.slider figure { 
  width: 20%; height: auto;
  display: inline-block;  position: inherit; 
}
figure.slider img { width: 100%; height: 300px; }
figure.slider figure figcaption { 
  position: absolute; bottom: 0;
  background: rgba(0,0,0,0.4);
  color: #fff; width: 100%;
  font-size: 1rem; padding: .6rem; 
}


</style>


	</head>
    <body>
    
	<?php include('includes/script.php'); ?>
	  <?php include('includes/header.php'); ?>
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Gallery</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Gallery</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
			<!-- Start portfolio -->
		<section class="portfolio section" >
			
			<div class="container-fluid">
				<div class="row">
        <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="img/image1.jpeg"  alt></img>
			<figcaption>Baker's cyst aspiration for knee pain</figcaption>
		</figure>
		<figure>
			<img src="img/image2.jpeg" alt> </img>
			<figcaption>Baker's cyst aspiration for knee pain</figcaption>
		</figure>
		
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="img/image5.jpeg" alt>
			<figcaption>Dr Sahoo teaching at 5th India Pain Update, New Delhi, November 2021</figcaption>
		</figure>
		<figure>
			<img src="img/image6.jpeg" alt>
			<figcaption>Dr Sahoo teaching at 5th India Pain Update, New Delhi, November 2021</figcaption>
		</figure>
	
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="img/image3.jpg" alt>
			<figcaption>Carpal Tunnel Syndrome Interventional treatment</figcaption>
		</figure>
		<figure>
			<img src="img/image4.jpeg" alt>
			<figcaption>Carpal Tunnel Syndrome Interventional treatment</figcaption>
		</figure>
	
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="img/image7.jpeg" alt>
			<figcaption>Dr Sahoo teaching at DY Patil University, Mumbai conference and workshop</figcaption>
		</figure>
		<figure>
			<img src="img/image8.jpeg" alt>
			<figcaption>Dr Sahoo teaching at DY Patil University, Mumbai conference and workshop</figcaption>
		</figure>
	
	</figure>
      </div>
   
			</div>

      
				</div>
				<br>
				<!--section 2--->
				<div class="row">
        <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="gallery/image14.jpg"  alt></img>
			<figcaption>Low back pain from Sacroiliac Joint- Therapeutic Injection</figcaption>
		</figure>
		<figure>
			<img src="gallery/image15.jpg" alt> </img>
			<figcaption>Shoulder pain treatment</figcaption>
		</figure>
		
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="gallery/image16.jpg" alt>
			<figcaption>Procedure for Cervical disc prolapse causing pain in neck & arm</figcaption>
		</figure>
		<figure>
			<img src="gallery/image17.jpg" alt>
			<figcaption>Procedure for Cervical disc prolapse causing pain in neck & arm</figcaption>
		</figure>
	
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="gallery/image18.jpeg" alt>
			<figcaption>teaching in conference</figcaption>
		</figure>
		<figure>
			<img src="gallery/image19.jpg" alt>
			<figcaption>Ultrasound for diagnosis and treatment</figcaption>
		</figure>
	
	</figure>
</div>
   
			</div>

      <div class="col-lg-3 col-12">
        <div id="captioned-gallery">
	<figure class="slider">
		<figure >
			<img src="gallery/image20.jpg" alt>
			<figcaption>Lumbar sympathetic Neurolysis for Vascular related pain called Buerger's disease</figcaption>
		</figure>
		
	
	</figure>
      </div>
   
			</div>

      
				</div>
			</div>
		</section>
		<!--/ End portfolio -->
		
		
		 <?php include('includes/footer.php'); ?>
		  <?php include('includes/footer_script.php'); ?>


   
	</body>
</html>